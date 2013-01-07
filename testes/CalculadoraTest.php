<?php
/** Endereço da biblioteca do PHPUnit */
require_once '/usr/share/php/PHPUnit/Framework/TestCase.php';

/** Nome da classe que será testada */
require_once 'Calculadora.php';


class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    /**
    * Objetos
    * @var object
    */
    protected $_calculadora; 
    
    
    /**
    * Construtor da classe 
    */
    protected function setUp()
    {
        $this->_calculadora = new Calculadora();
    }
    
    /**
    * Testa se dois mais dois é igual a quatro
    */
    public function testSomarDoisMaisDois()
    {
        self::assertEquals(4, $this->_calculadora->somar(2, 2));
    }
    
    /**
    * Testa se três mais três é igual a seis
    */
    public function testSomarTresMaisTres()
    {
        self::assertEquals(6, $this->_calculadora->somar(3 , 3));
    }
    
    /**
    * Testa se -5 mais -9 é igual a -14
    */
    public function testSomarDoisInteirosNegativos()
    {
        self::assertEquals(-14, $this->_calculadora->somar(-5, -9));
    }
    
    
}
