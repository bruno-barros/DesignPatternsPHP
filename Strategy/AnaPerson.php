<?php
namespace DesignPatternsPHP\Strategy;

use DesignPatternsPHP\Strategy\Behaviors\SpeakLoud;
use DesignPatternsPHP\Strategy\Behaviors\WalkFast;

/**
 * A classe concreta extende a classe abstrata...
 */
class AnaPerson extends PersonStrategy {
    
    /**
     * Por padrão tem um comportamento, mas pode ser alterado com:
     * - setSpeak()
     * - setWalk()
     */
    public function __construct()
    {
        $this->speakBehavior = new SpeakLoud();
        $this->walkBehavior = new WalkFast();
    }
    
    /**
     * Faz a pessoa falar....
     */
    public function speak()
    {
        echo "Sou Ana e {$this->speakBehavior->speak()} \n";
    }
    
    /**
     * Faz a pessoa andar...
     */
    public function walk()
    {
        echo "Sou Ana e {$this->walkBehavior->walk()} \n";
    }
    
}