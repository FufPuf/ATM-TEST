<?php

namespace ATM\Functional\CheckBalance\CheckBalanceInterface;

require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";

use ATM\Functional\CheckBalance\CurrencyAcc\AccInterface\AccInterface;

interface BalanceInterface
{
    public function checkBalance(AccInterface $acc);
}