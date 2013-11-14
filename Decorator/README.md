Decorator
=========

Anexa responsabilidades adicionais a um objeto dinamicamente. Os decoradores fornecem uma alternativa flexível de subclasse para estender a funcionalidade.

* Os decoradores têm o mesmo supertipo que os objetos que eles decoram
* Você pode usar um ou mais decoradores para englobar um objeto
* Uma vez que o decorador tem o mesmo supertipo que o objeto decorado, podemos passar um objeto no lugar do objeto original (englobado)
* O decorador adiciona seu próprio comportamento antes e/ou depois de delegar para o objeto que ele decora o resto do trabalho
* Os objetos podem ser decorados a qualquer momento, então podemos decorar os objetos de maneira dinâmica no tempo de execução com quantos decoradores desejarmos

### Exemplo

    /*
     * Exemplo: instancia-se a classe principal, que será decorada
     */
    $beverage = new BeverageConcrete();

    /*
     * Decorando...
     */
    $beverage = new Decorators\Milk($beverage); // com leite
    $beverage = new Decorators\Mocha($beverage); // com café

    echo $beverage->getDescription();
    echo "\n";
    echo $beverage->cost();