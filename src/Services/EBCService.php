<?php
declare(strict_types=1);

namespace Oddsscanner\Services;

use SimpleXMLElement;

class EBCService {

    private const URL = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

    /**
     * @return \SimpleXMLElement
     */
    public function loadData(): SimpleXMLElement
    {
        $curl = curl_init(self::URL);
        curl_setopt($curl, CURLOPT_URL, self::URL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ['Accept: application/xml'];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($resp);

        return $xml->Cube->Cube;
    }

    /**
     * @param $currency
     *
     * @return array
     */
    public function getCurrency($currency): array
    {
        $data = $this->loadData();

        $currencies = [];
        foreach ($data->Cube as $cube) {
            if((string) $cube['currency'] === $currency) {
                $currencies[] = [
                    'currency' => (string)$cube['currency'],
                    'rate' => (string)$cube['rate']
                ];
            }
        }

        return $currencies;
    }
}