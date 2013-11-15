<?php
namespace DesignPatternsPHP\FactoryMethod;

/**
 * Pode ser uma interface ou classe abstrata
 * Deve ser implementada pelas classes (pizzas) que serão geradas pela fábrica
 */
abstract class PizzaInterface {

    protected $name;
    protected $daugh;
    protected $sauce;
    protected $toppings = array();
    protected $output = '';

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        $this->output .= "Preparando pizza \"{$this->getName()}\" \n";
        $this->output .= "Adicionando ingredientes: \n";
        foreach ($this->toppings as $t)
        {
            $this->output .= "- {$t} \n";
        }
    }

    public function bake()
    {
        $this->output .= "Cozinhando... \n";
    }

    public function cut()
    {
        $this->output .= "Cortando a pizza... \n";
    }

    public function box()
    {
        $this->output .= "Embalando... \n";
    }
    
    /**
     * Apenas exibe o resultado do processo
     */
    public function output()
    {
        echo $this->output;
    }

}