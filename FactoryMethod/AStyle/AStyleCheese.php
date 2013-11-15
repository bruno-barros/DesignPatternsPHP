<?php
namespace DesignPatternsPHP\FactoryMethod\AStyle;

use DesignPatternsPHP\FactoryMethod\PizzaInterface;

/**
 * Implementação de um tipo concreto de pizza: estilo A de queijo
 */
class AStyleCheese extends PizzaInterface {
    
    /**
     * Define os atributos deste estilo de pizza
     */
    public function __construct()
    {
        $this->name = "A Style com queijo";
        $this->toppings[] = "Queijo";
        $this->toppings[] = "Tomate";
        $this->toppings[] = "Oregano";
    }
    
    /**
     * Neste estilo o corte é diferenciado
     */
    public function cut()
    {
        $this->output .= "Cortando a francesa \n";
    }
}