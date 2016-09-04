<?php

require_once 'init.php';

$calculator = new Calculator();

$calculator->setOperation(new Adder());
$calculator->calculate(10, 80);

$calculator->setOperation(new Subtractor());
$calculator->calculate(30);

$calculator->setOperation(new Multiplier());
$calculator->calculate(5);

$calculator->setOperation(new Divider());
$calculator->calculate(10);

echo $calculator->getResult();
