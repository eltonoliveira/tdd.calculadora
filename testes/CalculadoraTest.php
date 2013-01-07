<?php
/** Endereço da biblioteca do PHPUnit */
require_once '/usr/share/php/PHPUnit/Framework/TestCase.php';

/** Nome da classe que será testada */
require_once 'Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    /**
    * Testa se dois mais dois é igual a quatro
    */
    public function testSomarDoisMaisDois()
    {
        $calculadora = new Calculadora();
        
        self::assertEquals(4, $calculadora->somar(2, 2));
    
    }
    
    /**
    * Testa se três mais três é igual a seis
    */
    public function testSomarTresMaisTres()
    {
        $calculadora = new Calculadora();
        
        self::assertEquals(6, $calculadora->somar(3 , 3));
    }
    
}
