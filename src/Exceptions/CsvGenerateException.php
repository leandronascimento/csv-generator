<?php

namespace Oddsscanner\Exceptions;

use Exception;
use Throwable;

final class CsvGenerateException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct('Generate Csv faild', $code, $previous);
    }
}