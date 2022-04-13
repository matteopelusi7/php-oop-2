<?php

require_once __DIR__.'./User.php';

class UserRegistred extends User {

    public $sale = 0.20 * 100;

    function __construct() {

        parent::__construct($name, $lastname, $email, $address);

    }

}