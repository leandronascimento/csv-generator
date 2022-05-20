<?php 
declare(strict_types=1);

namespace Oddsscanner;

use DateTime;
use Oddsscanner\Exceptions\CsvGenerateException;
use Oddsscanner\Services\EBCService;

class Csv {
    protected EBCService $service;
    protected string $currency;

    public function __construct(EBCService $service, string $currency)
    {
        $this->service = $service;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function generate(): string
    {
        try {
            $data   = $this->service->getCurrency($this->currency);
            $file     = fopen($this->getFileName(), 'wb');

            fputcsv($file, array_keys($data[0]));

            foreach ($data as $fields) {
                fputcsv($file, $fields);
            }

            fclose($file);

            return 'Generate Csv Successful';
        } catch (CsvGenerateException $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * @return string
     */
    private function getFileName(): string
    {
        $datetime = new DateTime();
        $date = $datetime->format('Y-m-d-h:m:s');

        return sprintf('%s_currency_rates_%s.csv',
                    $this->currency,
                    $date);
    }
}