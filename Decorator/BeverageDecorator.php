<?php
namespace DesignPatternsPHP\Decorator;

use DesignPatternsPHP\Decorator\BeverageInterface;

/**
 * Interface dos decoradores
 * Todos são do mesmo tipo que as classes que vão decorar
 */
abstract class BeverageDecorator implements BeverageInterface {
    
    /**
     * Objeto decorado
     * @var BeverageInterface
     */
    protected $decorated;
    
    public function __construct(BeverageInterface $decorated)
    {
        $this->decorated = $decorated;
    }
}