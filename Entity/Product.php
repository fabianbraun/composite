<?php

class Product extends Entity {
    private $value = 0;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function traverse() {
        echo $this->indent . $this->value . "\n";
    }
}
