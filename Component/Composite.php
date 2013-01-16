<?php

abstract class Composite implements Component
{
    private $children = array();
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function add(Component $child)
    {
        $this->children[] = $child;
    }

    public function traverse()
    {
        echo $this->value . '  ';
        echo "\n";
        foreach ($this->children as $child) {
            $child->traverse();
        }
        echo "\n";
    }
}
