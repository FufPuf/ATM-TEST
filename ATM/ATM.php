<?php

namespace ATM;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/CashWithdrawal.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CheckBalance.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UahAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UsdAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Uah.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Usd.php";
require_once "/var/www/html/ATM-TEST/ATM/AbstractATM/AbstractATM.php";


use ATM\AbstractATM\AbstractATM;
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

    public function menuSelect(FunctionalInterface $menuItem)
    {
        $this->menuSelected = $menuItem;
        return $this;
    }

    public function currencySelect(FundInterface $currency)
    {
        $this->currencySelected = $currency;
        return $this;
    }
}

$cash = new ATM();
$result = $cash->menuSelect(new CheckBalance())->currencySelect(new UsdAcc())->showBalance();
var_dump($result);