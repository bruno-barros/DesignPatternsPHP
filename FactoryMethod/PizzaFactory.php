<?php
namespace DesignPatternsPHP\FactoryMethod;

/**
 * Fábrica de pizzas
 * Instruções de como fazer pizza
 */
abstract class PizzaFactory {

    /**
     * Método principal da fábrica
     * @param string $type O tipo de pizza que será criada pela fábrica
     * @return PizzaInterface
     */
    public function makePizza($type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    /**
     * Método que deve ser implementado pelas fábricas especializadas
     */
    abstract function createPizza($type);
}