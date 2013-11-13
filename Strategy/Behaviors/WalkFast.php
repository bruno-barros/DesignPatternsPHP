<?php
namespace DesignPatternsPHP\Strategy\Behaviors;

use DesignPatternsPHP\Strategy\WalkInterface;

class WalkFast implements WalkInterface {
    
    public function walk()
    {
        return "eu ando rapido.";
    }
}