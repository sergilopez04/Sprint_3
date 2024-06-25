<?php
require_once "tigger.php";

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

$tigger1->roar();
$tigger1->roar();

$tigger1->getCounter();


?>