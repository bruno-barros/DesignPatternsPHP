<?php
namespace DesignPatternsPHP\FactoryMethod\BStyle;

use DesignPatternsPHP\FactoryMethod\PizzaFactory;

class BStyleFactory extends PizzaFactory {

    /**
     * Define qual classe será instanciada (fabricada)
     * 
     * @param type $type
     * @return \DesignPatternsPHP\FactoryMethod\BStyle\BStyleCheese|\DesignPatternsPHP\FactoryMethod\BStyle\BStylePepperoni
     * @throws \InvalidArgumentException
     */
    public function createPizza($type)
    {
        if($type == 'cheese')
        {
            return new BStyleCheese();
        }
        else if ($type == 'pepperoni')
        {
            return new BStylePepperoni();
        }
        else
        {
            throw new \InvalidArgumentException("Este tipo de pizza \"{$type}\" não é válido.");
        }
    }
}