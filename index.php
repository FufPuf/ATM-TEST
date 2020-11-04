<?php

require_once "/var/www/html/ATM-TEST/ATM/ATM.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/CashWithdrawal.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CheckBalance.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UahAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/CheckBalance/CurrencyAcc/UsdAcc.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Uah.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Usd.php";
require_once "/var/www/html/ATM-TEST/ATM/AbstractATM/AbstractATM.php";
require_once "/var/www/html/ATM-TEST/ATM/Client/CheckClient.php";

use ATM\ATM;
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

$atm = new ATM(1234);

$cashUah = $atm->menuSelect(new CashWithdrawal())->currencySelect(new Uah())->getCash(850);
var_dump($cashUah);
$cashUsd = $atm->menuSelect(new CashWithdrawal())->currencySelect(new Usd())->getCash(160);
var_dump($cashUsd);

$balanceUah = $atm->menuSelect(new CheckBalance())->currencySelect(new UahAcc())->showBalance();
var_dump($balanceUah);
$balanceUsd = $atm->menuSelect(new CheckBalance())->currencySelect(new UsdAcc())->showBalance();
var_dump($balanceUsd);