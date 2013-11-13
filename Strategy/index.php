<?php
namespace DesignPatternsPHP\Strategy;

include '../loader.php';

/*
 * Exemplo de como invocar um objeto Strategy
 */
$ana = new AnaPerson();

/*
 * Por padrão a Ana já tem um comportamento:
 */
$ana->speak();
$ana->walk();

echo "\n";

/*
 * Mas podemos alterar o comportamento padrão
 */
$ana->setSpeak(new \DesignPatternsPHP\Strategy\Behaviors\SpeakDown());
$ana->setWalk(new \DesignPatternsPHP\Strategy\Behaviors\WalkSlow());

$ana->speak();
$ana->walk();
