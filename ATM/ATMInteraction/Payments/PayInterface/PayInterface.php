<?php

namespace ATMInteraction\Payments\PayInterface;

require_once "/var/www/html/ATM/ATMInteraction/Payments/Receivers/ReceiverInterface/ReceiverInterface.php";

use ATMInteraction\Payments\Receivers\ReceiverInterface\ReceiverInterface;

interface PayInterface
{
    public function __construct(ReceiverInterface $receiver);
    public function pay();
}