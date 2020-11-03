<?php

namespace ATMInteraction\Cash\Currency;
require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
use ATMInteraction\Cash\Сurrency\CurrencyInterface\CurrencyInterface;

class Uah implements CurrencyInterface
{
    const BILLS = [500, 200, 100, 50];
    const DAILY_LIMIT = 5000;
}