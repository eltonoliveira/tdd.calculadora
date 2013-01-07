<?php
/** Endereço da biblioteca do PHPUnit */
require_once '/usr/share/php/PHPUnit/Framework/TestCase.php';

/** Nome da classe que será testada */
require_once 'Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase
{

    public function testSomar()
    {
        $calculadora = new Calculadora();
        
        self::assertEquals(4, $calculadora->somar(2, 2));
    
    }

}
