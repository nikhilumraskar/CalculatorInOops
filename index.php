<?php
require_once 'init.php';

$c = new Calculator();

$c->set_operator(new Adder());

$c->calculate(1);//can take any no. of operants

$c->calculate(1,2,3);

echo $c->get_result();

echo "<br>";

$c->set_operator(new Subtracter());

$c->calculate(1,2,3);

echo $c->get_result();

echo "<br>";

$c->set_operator(new Multiplier());

$c->calculate(2);

echo $c->get_result();

echo "<br>";

$c->set_operator(new Dividor());

$c->calculate(2);

echo $c->get_result();

echo "<br>";


?>