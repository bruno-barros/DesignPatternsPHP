<?php
namespace DesignPatternsPHP\FactoryMethod;

include '../loader.php';

/*
 * Fabricando uma pizza no estilo "A" de queijo
 */
$aStyle = new AStyle\AStyleFactory();
$pizza = $aStyle->makePizza('cheese');
$pizza->output();

echo "\n";

/*
 * Fabricando uma pizza no estilo "A" de pepperoni
 */
$aStyle = new AStyle\AStyleFactory();
$pizza = $aStyle->makePizza('pepperoni');
$pizza->output();

echo "\n";

/*
 * Fabricando uma pizza no estilo "B" de pepperoni
 */
$bStyle = new BStyle\BStyleFactory();
$pizza = $bStyle->makePizza('pepperoni');
$pizza->output();

echo "\n";