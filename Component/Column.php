<?php

class Column extends Composite
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function traverse()
    {
        echo "Column start:\n";
        parent::traverse();
        echo "Column end.\n";
    }
}
