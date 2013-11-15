<?php
namespace DesignPatternsPHP\FactoryMethod\BStyle;

use DesignPatternsPHP\FactoryMethod\PizzaInterface;

/**
 * Implementação de um tipo concreto de pizza: estilo B de pepperoni
 */
class BStylePepperoni extends PizzaInterface {
    
    /**
     * Define os atributos deste estilo de pizza
     */
    public function __construct()
    {
        $this->name = "B Style com pepperoni";
        $this->toppings[] = "Queijo cheddar";
        $this->toppings[] = "Pepperoni";
        $this->toppings[] = "Cebola";
        $this->toppings[] = "Oregano";
    }
    
    /**
     * Neste estilo o cozimento é mais rápido
     */
    public function bake()
    {
        $this->output .= "Cozinhando em fogo alto por 20 minutos \n";
    }
}