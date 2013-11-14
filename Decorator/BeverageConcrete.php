<?php
namespace DesignPatternsPHP\Decorator;

use DesignPatternsPHP\Decorator\BeverageInterface;

/**
 * Implementação concreta
 * Objeto que será decorado
 */
class BeverageConcrete implements BeverageInterface {

    public $description;
    
    /**
     * Define a descrição da bebida
     */
    public function __construct()
    {
        $this->description = "Bebida concreta";
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Valor base da bebida
     * @return real
     */
    public function cost()
    {
        return 10.00;
    }

}