<?php

namespace ATM\Functional\Cash\Currency;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FundInterface.php";

use ATM\Functional\Cash\Currency\CurrencyInterface\CurrencyInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

class Usd implements CurrencyInterface, FundInterface
{
    private const BILLS_SORT = [100, 50, 20, 10];
    private const DAILY_LIMIT = 1000;

    public function getBillsSort() {
        return self::BILLS_SORT;
    }

    public function getDailyLimit() {
        return self::DAILY_LIMIT;
    }
}