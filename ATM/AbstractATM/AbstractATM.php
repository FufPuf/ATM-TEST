<?php


namespace ATM\AbstractATM;

require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FunctionalInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FundInterface.php";

use ATM\Functional\FunctionalInterfaces\FunctionalInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

abstract class AbstractATM
{
    abstract public function menuSelect(FunctionalInterface $menuItem);

    abstract public function currencySelect(FundInterface $currency);

    public function getCash($sum)
    {
        return $this->menuSelected->getBills($sum, $this->currencySelected);
    }

    public function showBalance()
    {
        return $this->menuSelected->checkBalance($this->currencySelected);
    }
}

