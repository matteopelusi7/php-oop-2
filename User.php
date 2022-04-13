<?php

class User {

    public $name;
    public $lastname;
    public $email;
    public $address;

    function __construct($_name, $_lastname, $_email, $_address) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->address = $_address;
    }

}