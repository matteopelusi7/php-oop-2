<?php

require_once __DIR__.'./Products.php';

class Food extends Products {

    public $typefood;
    public $sizeanimal;

    function __construct($_type, $_sizeanimal) {

        parent::__construct($name, $description, $price);

        $this->typefood = $_typefood;
        $this->sizeanimal = $_sizeanimal;
    }

}