<?php

class Box extends Entity {
    private $children = array();
    private $value = 0;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function add(Entity $entity)
    {
        $this->children[] = $entity;
    }

    public function traverse() {
        echo $this->indent . $this->value . "\n";
        $this->indent = $this->indent . '   ';
        foreach ($this->children as $child) {
            $child->traverse();
        }
}   }
