<?php

require __DIR__ . '/CompositeLevels.php';
require __DIR__ . '/Entity.php';
require __DIR__ . '/Box.php';
require __DIR__ . '/Product.php';

$root = CompositeLevels::getRoot();
$root->traverse();
