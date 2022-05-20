<?php

require_once __DIR__ . '/vendor/autoload.php';

use Oddsscanner\Csv;
use Oddsscanner\Services\EBCService;

return (new Csv(new EBCService(), 'USD'))->generate();