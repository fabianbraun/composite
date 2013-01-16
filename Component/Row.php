<?php

class Row extends Composite
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function traverse()
    {
        echo "Row start:\n";
        parent::traverse();
        echo "Row end.\n";
    }
}
