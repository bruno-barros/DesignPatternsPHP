Strategy
========

Define uma família de algoritmos, encapsula cada um deles e os torna intercambiáveis. A estratégia permite que o algoritmo varie independentemente dos clientes que o utilizam.

### Exemplo

    $ana = new AnaPerson();

    /*
     * Por padrão a Ana já tem um comportamento:
     */
    $ana->speak(); // SpeakLoud
    $ana->walk(); // WalkFast


    /*
     * Mas podemos alterar o comportamento padrão
     */
    $ana->setSpeak(new \DesignPatternsPHP\Strategy\Behaviors\SpeakDown());
    $ana->setWalk(new \DesignPatternsPHP\Strategy\Behaviors\WalkSlow());

    $ana->speak();
    $ana->walk();