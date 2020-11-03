<?php

namespace ATMInteraction\Payments\Receivers;
require_once "/var/www/html/ATM-TEST/Functional/Payments/Receivers/ReceiverInterface/ReceiverInterface.php";
use ATMInteraction\Payments\Receivers\ReceiverInterface\ReceiverInterface;

class CommunalPayment implements ReceiverInterface
{
    const DAILY_LIMIT = 10000;
    /**
     * @var int recipient account
     */
    const RECEIVER = "Сommunal organization account";
}