<?php

namespace ATM\Functional\Cash\Currency;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FundInterface.php";

use ATM\Functional\Cash\Currency\CurrencyInterface\CurrencyInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

class Uah implements CurrencyInterface, FundInterface
{
    private const BILLS_SORT = [500, 200, 100, 50];
    private const DAILY_LIMIT = 5000;

    public function getBillsSort() {
        return self::BILLS_SORT;
    }

    public function getDailyLimit() {
        return self::DAILY_LIMIT;
    }
}