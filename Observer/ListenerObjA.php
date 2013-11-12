<?php
namespace DesignPatternsPHP\Observer;

class ListenerObjA implements \SplObserver {

    /**
     * Atributo do listener
     * @var string
     */
    private $name = 'Ouvinte A';

    /**
     * Implementação da interface do ouvinte que é invocada toda vez que o 
     * objeto sujeito sofrer alteração.
     * 
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo "\"{$this->name}\" recebeu notificacao do objeto \"{$subject->getName()}\" \n";
    }

}