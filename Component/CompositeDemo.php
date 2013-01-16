<?php

require __DIR__ . '/Component.php';
require __DIR__ . '/Composite.php';
require __DIR__ . '/Column.php';
require __DIR__ . '/Row.php';
require __DIR__ . '/Primitive.php';

$firstRow = new Row(1);
$firstColumn = new Column(1);
$secondColumn = new Column(2);
$secondRow = new Row(2);
$thirdRow = new Row(3);
$firstRow->add($firstColumn);
$firstRow->add($secondColumn);
$secondColumn->add($secondRow);
$secondColumn->add($thirdRow);
$firstRow->add(new Primitive(1));
$firstColumn->add(new Primitive(2));
$secondColumn->add(new Primitive(3));
$secondRow->add(new Primitive(4));
$thirdRow->add(new Primitive(5));
$firstRow->traverse();
