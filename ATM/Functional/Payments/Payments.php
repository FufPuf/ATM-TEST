<?php

namespace ATMInteraction\Payments;

require_once "/var/www/html/ATM-TEST/Functional/Payments/Receivers/ReceiverInterface/ReceiverInterface.php";
require_once "/var/www/html/ATM-TEST/Functional/Payments/Receivers/CommunalPayment.php";
require_once "/var/www/html/ATM-TEST/Functional/Payments/Receivers/MobilePayment.php";

use ATMInteraction\Payments\PayInterface\PayInterface;
use ATMInteraction\Payments\Receivers\ReceiverInterface\ReceiverInterface;
use ATMInteraction\Payments\Receivers\CommunalPayment;
use ATMInteraction\Payments\Receivers\MobilePayment;

class Payments implements PayInterface
{
    private $resiver;

    public function __construct(ReceiverInterface $receiver)
    {
        $this->resiver = $receiver;
    }

    public function pay($sum)
    {
        if($sum <= $this->resiver::DAILY_LIMIT) {

        }
    }
}