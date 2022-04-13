<?php

require_once __DIR__.'./Products.php';

class Bed extends Products {

    public $size;

    function __construct($_size) {

        parent::__construct($name, $description, $price);

        $this->size = $_size;
    }

}