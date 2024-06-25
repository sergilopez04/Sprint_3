<?php
require_once "claus.php";
require_once "cartera.php";
require_once "smartphone.php";
require_once "persona.php";

$cartera = new Cartera('rojo');
$smartphone = new Smartphone('iPhone');
$claus = new Claus(['Cotxe', 'Casa']);

$inventario = [
    'cartera' => $cartera,
    'smartphone' => $smartphone,
    'claus' => $claus
];

$persona = new Persona($inventario);

echo "Persona tiene una cartera de color: " . $persona->inventario['cartera']->color . PHP_EOL;
echo "Persona tiene un smartphone modelo: " . $persona->inventario['smartphone']->modelo . PHP_EOL;
echo "Persona tiene claus: " . implode(', ', $persona->inventario['claus']->claus) . PHP_EOL;
?>