<?php
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/../Wallet.php';

class User extends Person {
    private $username;
    private $password;
    protected $orders;
    private $discount;
    private $wallet;

    //constructor
    function __construct($firstName, $lastName, $email, $birthDate, $username, $password) {   
        parent::__construct($firstName, $lastName, $email, $birthDate);     
        $this->username = $username;
        $this->password = $password; 
        $this->orders = [];       
        $this->discount = 0;       
    }

    //setters
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function setDiscount() {
        if(count($this->orders) < 50) {
            $this->discount = 0;
        } else {            
            $this->discount = 20;
        }
    } 

    public function setWallet($wallet) {
        $this->wallet = $wallet;
    }

    //getters
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    } 

    public function getOrders() {
        return $this->orders;
    }

    public function getDiscount() {
        return $this->discount;
    } 

    public function getWallet() {
        return $this->wallet;
    } 

    //methods
    public function addOrder($order) {
        $this->orders[] = $order;
    }
}