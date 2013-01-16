<?php

class CompositeLevels {

    public static function getRoot()
    {
        $nodes = array();
        $nodes[] = new Box(1);
        $s = array(1, 4, 7);
        for ($i = 0; $i < 3; $i++) {
            $nodes[2] = new Box(21 + $i );
            $nodes[0]->add($nodes[2]);
            $level = 3;
            for ($j=0; $j < 4; $j++) {
                $nodes[$level - 1]->add(new Product($level * 10 + $s[$i]));
                $nodes[$level] = new Box($level * 10 + $s[$i] + 1 );
                $nodes[$level - 1]->add($nodes[$level]);
                $nodes[$level - 1]->add(new Product($level * 10 + $s[$i] + 2));
                $level++;
            }
        }

        return $nodes[0];
    }
}
