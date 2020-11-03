<?php

namespace ATM\Functional\Cash\CashWithdrawalInterface;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/CurrencyInterface/CurrencyInterface.php";

use ATM\Functional\Cash\Currency\CurrencyInterface\CurrencyInterface;

interface CashWithdrawalInterface
{
    public function getBills(int $withdrawAmount, CurrencyInterface $currency);
}