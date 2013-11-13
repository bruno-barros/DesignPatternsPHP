Observer
========

Define uma família de algoritmos, encapsula cada um deles e os torna intercambiáveis. A estratégia permite que o algoritmo varie independentemente dos clientes que o utilizam.

### Exemplo

    /*
     * Exemplo de como instanciar objeto sujeito da ação e adicionar objetos ouvintes.
     */
    $subject = new ChangeObj();
    $observerA = new ListenerObjA();
    $observerB = new ListenerObjB();

    /*
     * Adiciona ouvinte
     */
    $subject->attach($observerA);
    $subject->attach($observerB);

    /*
     * Muda um atributo (ouvintes são notificados)
     */
    $subject->setName('Eu gosto de atencao');

    /*
     * Nova mudança de atributo (ouvintes são notificados)
     */
    $subject->setName('Eu adoro atencao');