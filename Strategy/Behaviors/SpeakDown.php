<?php
namespace DesignPatternsPHP\Strategy\Behaviors;

use DesignPatternsPHP\Strategy\SpeakInterface;

class SpeakDown implements SpeakInterface {
    
    public function speak()
    {
        return "eu falo baixo.";
    }
}