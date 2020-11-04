<?php


namespace ATM\AbstractATM;

require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FunctionalInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FundInterface.php";

use ATM\Functional\FunctionalInterfaces\FunctionalInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

abstract class AbstractATM
{

    abstract public function __construct(int $pass);

    abstract public function menuSelect(FunctionalInterface $menuItem);

    abstract public function currencySelect(FundInterface $currency);

    /**
     * @param $sum int How much we want to withdraw from the ATM
     * @return array | string array representing the bills that should be distributed by the ATM or fail.
     */
    public function getCash(int $sum)
    {
        return $this->menuSelected->getBills($sum, $this->currencySelected);
    }

    /**
     * @return int displays the amount on the account balance
     */
    public function showBalance()
    {
        return $this->menuSelected->checkBalance($this->currencySelected);
    }
}

