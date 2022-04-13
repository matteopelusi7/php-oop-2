<?php

class CreditCard {

    public $name;
    public $lastname;
    public $address;
    public $number;
    public $cvv;
    public $yearscad;
    public $monthscad;
    public $card;

    function __construct($_name, $_lastname, $_address, $_number, $_cvv, $_yearscad, $_monthscad) {

        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->address = $_address;
        $this->number = $_number;
        $this->cvv = $_cvv;
        $this->yearscad = $_yearscad;
        $this->monthscad = $_monthscad;
    }

    public function creditCardScad() {

        if( $monthscad >= idate("m") && $yearscad >= idate("y") ) {

            $this->card = 'La carta non è scaduta';

        } else {

            $this->card = 'La carta è scaduta';

        }
        
    }

}