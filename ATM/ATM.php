<?php

namespace ATM;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/CashWithdrawal.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CheckBalance.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UahAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UsdAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Uah.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Usd.php";
require_once "/var/www/html/ATM-TEST/ATM/AbstractATM/AbstractATM.php";
require_once "/var/www/html/ATM-TEST/ATM/Client/CheckClient.php";


use ATM\AbstractATM\AbstractATM;
use ATM\Client\CheckClient;
use ATM\Functional\Cash\CashWithdrawal;
use ATM\Functional\Cash\Currency\Uah;
use ATM\Functional\Cash\Currency\Usd;
use ATM\Functional\CheckBalance\CheckBalance;
use ATM\Functional\CheckBalance\CurrencyAcc\UahAcc;
use ATM\Functional\CheckBalance\CurrencyAcc\UsdAcc;
use ATM\Functional\FunctionalInterfaces\FunctionalInterface;
use ATM\Functional\FunctionalInterfaces\FundInterface;

class ATM extends AbstractATM
{
    protected $menuSelected;
    protected $currencySelected;
    private $checkResult;

    /**
     * ATM constructor.
     * Creating a client verification object
     * @param int $pass entered card password
     */
    public function __construct(int $pass)
    {
        $this->checkResult = (new CheckClient($pass))->checkPass();
        if($this->checkResult === false) {
            exit('Incorrect password entered');
        }
    }

    /**
     * Choice of ATM function by the customer
     * @param FunctionalInterface $menuItem
     * @return $this
     */
    public function menuSelect(FunctionalInterface $menuItem)
    {
        $this->menuSelected = $menuItem;
        return $this;
    }

    /**
     * Choice of currency for the ATM function by the customer
     * @param FundInterface $currency
     * @return $this
     */
    public function currencySelect(FundInterface $currency)
    {
        $this->currencySelected = $currency;
        return $this;
    }

}

