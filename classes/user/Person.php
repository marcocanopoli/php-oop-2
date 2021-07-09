<?php 
class Person {
    private $firstName;
    private $lastName;
    private $email;
    private $birthDate;
    private $address;

    //constructor
    function __construct($firstName, $lastName, $email, $birthDate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthDate = $birthDate;
    }

    //setters
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    //getters
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }

    public function getAddress() {
        return $this->address;
    }
}