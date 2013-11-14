<?php
namespace DesignPatternsPHP\Decorator;

include '../loader.php';

/*
 * Exemplo: instancia-se a classe principal, que será decorada
 */
$beverage = new BeverageConcrete();

/*
 * Decorando...
 */
$beverage = new Decorators\Milk($beverage); // com leite
$beverage = new Decorators\Mocha($beverage); // com café

echo $beverage->getDescription();
echo "\n";
echo $beverage->cost();