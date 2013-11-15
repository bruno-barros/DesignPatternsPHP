<?php
namespace DesignPatternsPHP\FactoryMethod\AStyle;

use DesignPatternsPHP\FactoryMethod\PizzaInterface;

/**
 * Implementação de um tipo concreto de pizza: estilo A de pepperoni
 */
class AStylePepperoni extends PizzaInterface {
    
    /**
     * Define os atributos deste estilo de pizza
     */
    public function __construct()
    {
        $this->name = "A Style com pepperoni";
        $this->toppings[] = "Queijo";
        $this->toppings[] = "Pepperoni";
        $this->toppings[] = "Cebola";
        $this->toppings[] = "Oregano";
    }
    
    /**
     * Neste estilo o cozimento é mais demorado
     */
    public function bake()
    {
        $this->output .= "Cozinhando em fogo baixo por 45 minutos \n";
    }
}