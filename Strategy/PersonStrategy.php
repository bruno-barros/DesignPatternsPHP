<?php
namespace DesignPatternsPHP\Strategy;

use DesignPatternsPHP\Strategy\SpeakInterface;
use DesignPatternsPHP\Strategy\WalkInterface;

/**
 * Abstração para objeto pessoa que implementa padrão Strategy
 */
abstract class PersonStrategy {

    /**
     * Objeto para forma de falar
     * @var object
     */
    public $speakBehavior;

    /**
     * Objeto para forma de andar
     * @var object
     */
    public $walkBehavior;

    /**
     * Define objeto para forma de falar
     * @param object $speakBehavior
     */
    public function setSpeak(SpeakInterface $speakBehavior)
    {
        $this->speakBehavior = $speakBehavior;
    }

    /**
     * Fala
     * Implementação padrão para falar.
     */
    public function speak()
    {
        return $this->speakBehavior->speak();
    }

    /**
     * Define objeto para forma de andar
     * @param object $walkBehavior
     */
    public function setWalk(WalkInterface $walkBehavior)
    {
        $this->walkBehavior = $walkBehavior;
    }

    /**
     * Anda
     * Implementação padrão para andar.
     */
    public function walk()
    {
        return $this->walkBehavior->walk();
    }

}