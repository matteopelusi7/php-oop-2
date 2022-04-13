<?php

require_once __DIR__.'./Products.php';

class Games extends Products {

    public $type;
    public $height;
    public $width;
    public $animal;

    function __construct($_type, $_height, $_width, $_animal) {

        parent::__construct($name, $description, $price);

        $this->type = $_type;
        $this->height = $_height;
        $this->width = $_width;
        $this->animal = $_animal;
    }

}