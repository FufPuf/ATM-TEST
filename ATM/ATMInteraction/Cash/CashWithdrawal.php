<?php
namespace ATMInteraction\Cash;

require_once "/var/www/html/ATM/ATMInteraction/Cash/CashWithdrawalInterface/CashWithdrawalInterface.php";
require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/CurrencyInterface/CurrencyInterface.php";
require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/Uah.php";
require_once "/var/www/html/ATM/ATMInteraction/Cash/Currency/Usd.php";

use ATMInteraction\Cash\CashWithdrawalInterface\CashWithdrawalInterface;
use ATMInteraction\Cash\Currency\Usd;
use ATMInteraction\Cash\Currency\Uah;
use ATMInteraction\Cash\Сurrency\CurrencyInterface\CurrencyInterface;

class CashWithdrawal implements CashWithdrawalInterface
{
    private $money_left;
    private $withdrawCash = [];
    private $currency;

    /**
     * CashWithdrawal constructor.
     * @param CurrencyInterface $currency takes the class of the required currency
     */
    public function __construct(CurrencyInterface $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param int $withdrawAmount How much we want to withdraw from the ATM
     * @return array | string array representing the bills that should be distributed by the ATM or fail.
     */
    public function getBills($withdrawAmount) {
        $this->withdrawCash = [];
        $this->money_left = $withdrawAmount;
        while ($this->money_left > 0) {
            if ($this->money_left < min($this->currency::BILLS)) {
                return "This amount cannot be paid.";
            }
            $bill = $this->configureBills();
            $this->withdrawCash[] = $bill;
            $this->money_left -= $bill;
        }
        if(array_sum($this->withdrawCash) <= $this->currency::DAILY_LIMIT)
        {
            return array_count_values($this->withdrawCash);
        } else {
            return "The limit on the payment of funds has been exceeded.";
        }
    }

    /**
     * @return int matching bills and selects the least amount
     */

    private function configureBills() {
        $left = $this->money_left;
        foreach ($this->currency::BILLS as $bill) {
            $division = $left / $bill;
            $rest = $left % $bill;
            if (($division >= 1) && ( $rest > (min($this->currency::BILLS)+1) || ($rest === min($this->currency::BILLS)) || ($rest === 0) ) ) {
                return $bill;
            }
        }
        return min($this->currency::BILLS);
    }
}

$uah = new Uah();
$usd = new Usd();

$cash = new CashWithdrawal($uah);
var_dump($cash->getBills(2750));