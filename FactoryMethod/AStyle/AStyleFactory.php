<?php
namespace DesignPatternsPHP\FactoryMethod\AStyle;

use DesignPatternsPHP\FactoryMethod\PizzaFactory;

/**
 * Método fábrica para o estilo A
 */
class AStyleFactory extends PizzaFactory {
    
    /**
     * Define qual classe será instanciada (fabricada)
     * 
     * @param string $type
     * @return \DesignPatternsPHP\FactoryMethod\AStyle\AStyleCheese|\DesignPatternsPHP\FactoryMethod\AStyle\AStylePepperoni
     * @throws \InvalidArgumentException
     */
    public function createPizza($type)
    {
        if($type == 'cheese')
        {
            return new AStyleCheese();
        }
        else if ($type == 'pepperoni')
        {
            return new AStylePepperoni();
        }
        else
        {
            throw new \InvalidArgumentException("Este tipo de pizza \"{$type}\" não é válida.");
        }
    }
}