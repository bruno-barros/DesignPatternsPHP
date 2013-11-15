<?php
namespace DesignPatternsPHP\FactoryMethod\BStyle;

use DesignPatternsPHP\FactoryMethod\PizzaInterface;

/**
 * Implementação de um tipo concreto de pizza: estilo B de queijo
 */
class BStyleCheese extends PizzaInterface {
    
    /**
     * Define os atributos deste estilo de pizza
     */
    public function __construct()
    {
        $this->name = "B Style com queijo";
        $this->toppings[] = "Queijo";
        $this->toppings[] = "Tomate";
        $this->toppings[] = "Mangericao";
    }
    
    /**
     * Neste estilo o corte é diferenciado
     */
    public function cut()
    {
        $this->output .= "Cortando em 6 fatias \n";
    }
}