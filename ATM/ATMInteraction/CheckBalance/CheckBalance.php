<?php

namespace ATMInteraction\CheckBalance;

require_once "/var/www/html/ATM/ATMInteraction/CheckBalance/CheckBalanceInterface/BalanceInterface.php";
require_once "/var/www/html/ATM/ATMInteraction/CheckBalance/CurrencyAcc/UahAcc.php";
require_once "/var/www/html/ATM/ATMInteraction/CheckBalance/CurrencyAcc/UsdAcc.php";

use ATMInteraction\CheckBalance\BalanceInterface\BalanceInterface;
use ATMInteraction\CheckBalance\CurrencyAcc\AccInterface\AccInterface;
use ATMInteraction\CheckBalance\CurrencyAcc\UahAcc;
use ATMInteraction\CheckBalance\CurrencyAcc\UsdAcc;

class CheckBalance implements BalanceInterface
{
    private $acc;

    /**
     * CheckBalance constructor.
     * @param AccInterface $acc takes the class of the required acc
     */
    public function __construct(AccInterface $acc)
    {
        $this->acc = $acc;
    }

    /**
     * @return int displays the amount on the account balance
     */
    public function checkBalance()
    {
        return $this->acc->getBalance();
    }
}

$UahAcc = new UahAcc();
$UsdAcc = new UsdAcc();
$check = new CheckBalance($UsdAcc);
var_dump($check->checkBalance());