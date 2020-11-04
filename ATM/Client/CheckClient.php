<?php


namespace ATM\Client;


class CheckClient
{
    /**
     * @var int correct card password
     */
    private $cardPass = 1234;

    /**
     * @var bool presence of a card at an ATM (absent as standard)
     */
    private $card = false;

    /**
     * @var int entered card password
     */
    private $enteredPass;

    /**
     * CheckClient constructor.
     * Automatically confirms the presence of the card
     * @param $pass int card pass
     */
    public function __construct(int $pass)
    {
        $this->card = true;
        $this->enteredPass = $pass;
    }

    public function checkPass()
    {
        $cardPass = $this->cardPass;
        $enteredPass  = $this->enteredPass;

        if($cardPass === $enteredPass) {
            return true;
        } else {
            return false;
        }
    }
}

