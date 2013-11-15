Observer
========

Define a dependência *um para muitos* entre objetos para que quando um objeto mude de estado todos os seus dependentes sejam avisados e atualzados automaticamente.

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