<?php


namespace ATM\CheckClient;


class CheckClient
{
    /**
     * @var bool presence of a card at an ATM (absent as standard)
     */
    private $card = false;

    /**
     * @var int entered password
     */
    private $password;

    /**
     * CheckClient constructor.
     * Automatically confirms the presence of the card
     * @param $pass int card pass
     */
    public function __construct(int $pass)
    {
        $this->card = true;
        $this->password = $pass;
    }
}

