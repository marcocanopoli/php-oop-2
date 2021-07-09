<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User {

    //setters
    public function setDiscount() {
        if(count($this->orders) < 50) {
            $this->discount = 20;
        } else {            
            $this->discount = 50;
        }
    }

    //getters
    public function getDiscount() {
        return $this->discount;
    }
}