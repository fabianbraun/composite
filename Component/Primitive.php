<?php

class Primitive implements Component
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function traverse()
    {
        echo "Primitive: \n";
        echo $this->value . "\n";
    }
}
