<?php

namespace ATMInteraction\Payments;

require_once "/var/www/html/ATM-TEST/ATMInteraction/Payments/Receivers/ReceiverInterface/ReceiverInterface.php";
require_once "";

use ATMInteraction\Payments\PayInterface\PayInterface;
use ATMInteraction\Payments\Receivers\ReceiverInterface\ReceiverInterface;

class Payments implements PayInterface
{

    public function __construct(ReceiverInterface $receiver)
    {

    }

    public function pay()
    {
        // TODO: Implement pay() method.
    }
}