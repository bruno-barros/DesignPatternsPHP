<?php
namespace DesignPatternsPHP\Strategy\Behaviors;

use DesignPatternsPHP\Strategy\SpeakInterface;

class SpeakLoud implements SpeakInterface {
    
    public function speak()
    {
        return "eu falo alto.";
    }
}