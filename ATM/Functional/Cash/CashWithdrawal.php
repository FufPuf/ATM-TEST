<?php
namespace ATM\Functional\Cash;

require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/CashWithdrawalInterface/CashWithdrawalInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Uah.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/Cash/Currency/Usd.php";
require_once "/var/www/html/ATM-TEST/ATM/Functional/FunctionalInterfaces/FunctionalInterface.php";

use ATM\Functional\Cash\CashWithdrawalInterface\CashWithdrawalInterface;
use ATM\Functional\Cash\Currency\Usd;
use ATM\Functional\Cash\Currency\Uah;
use ATM\Functional\Cash\Currency\CurrencyInterface\CurrencyInterface;
use ATM\Functional\FunctionalInterfaces\FunctionalInterface;

class CashWithdrawal implements CashWithdrawalInterface, FunctionalInterface
{
    private $money_left;
    private $withdrawCash = [];
    private $currency;

    /**
     * @param int $withdrawAmount How much we want to withdraw from the ATM
     * @param CurrencyInterface $currency takes the class of the required currency
     * @return array | string array representing the bills that should be distributed by the ATM or fail.
     */
    public function getBills(int $withdrawAmount, CurrencyInterface $currency) {
        $this->currency = $currency;
        $this->withdrawCash = [];
        $this->money_left = $withdrawAmount;
        while ($this->money_left > 0) {
            if ($this->money_left < min($this->currency->getBillsSort())) {
                return "This amount cannot be paid.";
            }
            $bill = $this->configureBills();
            $this->withdrawCash[] = $bill;
            $this->money_left -= $bill;
        }
        if(array_sum($this->withdrawCash) <= $this->currency->getDailyLimit())
        {
            return array_count_values($this->withdrawCash);
        } else {
            return "Exceeding the withdrawal amount";
        }
    }

    /**
     * Matching bills and selects the least amount
     * @return int denomination
     */
    private function configureBills() {
        $left = $this->money_left;
        foreach ($this->currency->getBillsSort() as $bill) {
            $division = $left / $bill;
            $rest = $left % $bill;
            if (($division >= 1) && ( $rest > (min($this->currency->getBillsSort())+1) || ($rest === min($this->currency->getBillsSort())) || ($rest === 0) ) ) {
                return $bill;
            }
        }
        return min($this->currency->getBillsSort());
    }
}
