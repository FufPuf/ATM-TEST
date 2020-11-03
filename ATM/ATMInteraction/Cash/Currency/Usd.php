<?php

namespace ATMInteraction\Cash\Currency;
require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
use ATMInteraction\Cash\Сurrency\CurrencyInterface\CurrencyInterface;

class Usd implements CurrencyInterface
{
    const BILLS = [100, 50, 20, 10];
    const DAILY_LIMIT = 1000;
}