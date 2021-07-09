<?php 
class CreditCard {
    private $holder;
    private $number;
    private $expirationDate;
    private $CVC;

    //constructor
    function __construct($holder, $number, $expirationDate, $CVC) {
        $this->holder = $holder;        
        $this->number = $number;        
        $this->expirationDate = $expirationDate;        
        $this->CVC = $CVC;        
    }

    //getters
    public function getNumber() {
        return $this->number;
    }
    
    public function getHolder() {
        return $this->holder;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getCVC() {
        return $this->CVC;
    }
}