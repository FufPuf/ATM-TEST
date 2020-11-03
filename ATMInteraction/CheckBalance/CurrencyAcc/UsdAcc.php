<?php

namespace ATMInteraction\CheckBalance\CurrencyAcc;
require_once "/var/www/html/ATM-TEST/ATMInteraction/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";
use ATMInteraction\CheckBalance\CurrencyAcc\AccInterface\AccInterface;

class UsdAcc implements AccInterface
{
    /**
     * @var int account balance cover
     */
    public $accountBalance = 2000;

    /**
     * @return int account balance
     */
    public function getBalance() {
        return $this->accountBalance;
    }
}