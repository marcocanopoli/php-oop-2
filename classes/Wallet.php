<?php
class Wallet {
    private $balance;
    private $cards;

    //constructor
    function __construct($balance = 0, $cards = []) {
        $this->balance = $balance;
        $this->cards = $cards;
    }

    //setters
    public function setBalance($balance) {
        $this->balance = $balance;
    }

    //getters
    public function getBalance() {
        return $this->balance;
    }

    public function getCards() {
        return $this->cards;
    }

    //methods
    public function addCard($name, $card) {
        $this->cards[$name] = $card;
    }
}