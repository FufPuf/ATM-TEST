<?php

namespace ATM\Functional\CheckBalance;

require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CheckBalanceInterface/BalanceInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FunctionalInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/AccInterface/AccInterface.php";

use ATM\Functional\CheckBalance\CheckBalanceInterface\BalanceInterface;
use ATM\Functional\CheckBalance\CurrencyAcc\AccInterface\AccInterface;
use ATM\Functional\FunctionalInterfaces\FunctionalInterface;

class CheckBalance implements BalanceInterface, FunctionalInterface
{
    private $acc;

    /**
     * @param AccInterface $acc takes the class of the required acc
     * @return int displays the amount on the account balance
     */
    public function checkBalance(AccInterface $acc)
    {
        $this->acc = $acc;
        return $this->acc->getBalance();
    }
}