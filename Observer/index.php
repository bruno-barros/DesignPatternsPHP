<?php
namespace DesignPatternsPHP\Observer;

include '../loader.php';

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
 * Muda um atributo e notifica ouvintes
 */
$subject->setName('Eu gosto de atencao');

/*
 * Nova mudança de atributo e notifica ouvintes
 */
$subject->setName('Eu adoro atencao');

