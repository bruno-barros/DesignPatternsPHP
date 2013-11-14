<?php
namespace DesignPatternsPHP\Decorator;

/**
 * Interface dos objetos que serão os decoradores
 * No caso... bebidas
 */
interface BeverageInterface {

    public function getDescription();

    public function cost();
}