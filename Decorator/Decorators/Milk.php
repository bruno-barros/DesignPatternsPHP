<?php
namespace DesignPatternsPHP\Decorator\Decorators;

use DesignPatternsPHP\Decorator\BeverageDecorator;

/**
 * Implementação de um decorador que adiciona leite na bebida
 */
class Milk extends BeverageDecorator {
    
    /**
     * Adiciona o componente na descrição
     * @return string
     */
    public function getDescription()
    {
        $description = $this->decorated->getDescription();
        return $description . " + leite";
    }
    
    /**
     * Incrementa o valor de base
     * @return float
     */
    public function cost()
    {
        $cost = $this->decorated->cost();
        return $cost + 1.50;
    }
}