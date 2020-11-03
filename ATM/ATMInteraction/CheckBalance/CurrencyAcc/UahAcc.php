<?php

namespace ATMInteraction\CheckBalance\CurrencyAcc;
require_once "/var/www/html/ATM/ATMInteraction/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";
use ATMInteraction\CheckBalance\CurrencyAcc\AccInterface\AccInterface;

class UahAcc implements AccInterface
{
    /**
     * @var int account balance cover
     */
    public $accountBalance = 10000;

    /**
     * @return int account balance
     */
    public function getBalance() {
        return $this->accountBalance;
    }
}