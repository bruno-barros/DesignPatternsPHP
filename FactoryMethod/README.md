FactoryMethod
=============

Define um ainterface para criar um objeto, mas permite às classes decidir qual classe instanciar. O Factory Method permite a uma classe deferir a instanciação para subclases.


### Exemplo

    /*
     * Fabricando uma pizza no estilo "A" de queijo
     */
    $aStyle = new AStyle\AStyleFactory();
    $pizza = $aStyle->makePizza('cheese');
    $pizza->output();


    /*
     * Fabricando uma pizza no estilo "A" de pepperoni
     */
    $aStyle = new AStyle\AStyleFactory();
    $pizza = $aStyle->makePizza('pepperoni');
    $pizza->output();


    /*
     * Fabricando uma pizza no estilo "B" de pepperoni
     */
    $bStyle = new BStyle\BStyleFactory();
    $pizza = $bStyle->makePizza('pepperoni');
    $pizza->output();