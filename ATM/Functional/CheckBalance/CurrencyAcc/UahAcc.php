<?php

namespace ATM\Functional\CheckBalance\CurrencyAcc;

require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FundInterface.php";

use ATM\Functional\CheckBalance\CurrencyAcc\AccInterface\AccInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

class UahAcc implements AccInterface, FundInterface
{
    /**
     * @var int account balance
     */
    private $accountBalance = 10000;

    /**
     * @return int account balance
     */
    public function getBalance() {
        return $this->accountBalance;
    }
}