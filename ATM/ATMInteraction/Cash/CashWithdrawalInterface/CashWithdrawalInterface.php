<?php

namespace ATMInteraction\Cash\CashWithdrawalInterface;

require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/CurrencyInterface/CurrencyInterface.php";

use ATMInteraction\Cash\Сurrency\CurrencyInterface\CurrencyInterface;

interface CashWithdrawalInterface
{
    public function __construct(CurrencyInterface $currency);
    public function getBills($withdrawAmount);
}