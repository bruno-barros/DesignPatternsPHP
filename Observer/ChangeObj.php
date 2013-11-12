<?php
namespace DesignPatternsPHP\Observer;

/**
 * Objeto que muda e que deve anunciar seu estado aos ouvintes.
 */
class ChangeObj implements \SplSubject {

    /**
     * Objetos ouvintes que serão notificados
     * @var array
     */
    private $observers = array();

    /**
     * Atributo do objeto que ao mudar gera notificação
     * @var string
     */
    private $name;

    /**
     * Adiciona objeto como ouvinte
     * @param \SplObserver $observer
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Remove objeto
     * @param \SplObserver $observer
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key)
        {
            unset($this->observers[$key]);
        }
    }

    /**
     * Emite notificação para seus ouvintes através do método update()
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
    
    /*
     * Após a implementação da interface SplSubject, os métodos que disparam
     * as notificações de alteração.
     */
    
    /**
     * Seta/altera atributo
     * @param type $name
     * @return void 
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->notify();
    }
    
    /**
     * Retorna o atributo
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}