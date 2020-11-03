<?php

namespace ATMInteraction\CheckBalance\BalanceInterface;

require_once "/var/www/html/ATM-TEST/ATMInteraction/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";

use ATMInteraction\CheckBalance\CurrencyAcc\AccInterface\AccInterface;

interface BalanceInterface
{
    public function __construct(AccInterface $acc);
    public function checkBalance();
}