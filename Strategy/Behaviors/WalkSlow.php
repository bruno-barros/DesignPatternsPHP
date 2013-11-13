<?php
namespace DesignPatternsPHP\Strategy\Behaviors;

use DesignPatternsPHP\Strategy\WalkInterface;

class WalkSlow implements WalkInterface {
    
    public function walk()
    {
        return "eu ando bem devagar.";
    }
}