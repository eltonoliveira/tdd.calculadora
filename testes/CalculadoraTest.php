<?php
/** Endereço da biblioteca do PHPUnit */
require_once '/usr/share/php/PHPUnit/Framework/TestCase.php';

/** Nome da classe que será testada */
require_once '../Calculadora.php';
require_once '../Numero.php';


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
    * Provedor dos dados que serão somados
    */
    public static function provedorDosDadosDaSoma()
    {
        return array(
          '0 mais 0 e 0' => array(0, 0, 0),
          '0 mais 1 e 1' => array(0, 1, 1),
          '1 mais 0 e 1' => array(1, 0, 1),
          '1 mais -1 e 0' => array(1, -1, 0),
          '-1 mais -1 e -2' => array(-1, -1, -2),
          '5 mais -5 e 0' => array(5, -5, 0),
          '9^9 mais 9^9 e 18^9' => array(9000000000, 9000000000, 18000000000),
          '9.5 mais 9.68 e 19.18' => array(9.5, 9.68, 19.18),
          "'Cola' mais 2 e 'Cola2'" => array('Cola', 2, 'Cola2'),
          "'Cola' mais ' ' e 'Cola '" => array('Cola', ' ', 'Cola '),
          "'3' mais 'Cola' e '3Cola'" => array(3, 'Cola', '3Cola'),
          "'' mais '' e NULL" => array('', '', NULL),
          "NULL mais NULL e NULL" => array(NULL, NULL, NULL),
          "Numero(9) mais 5 e 14" => array(new Numero(9), 5, 14)
        );
    }
    
    /**
    * @name testSomarDoisNumeros
    * @dataProvider provedorDosDadosDaSoma
    */
    public function testSomarDoisNumeros($valor1, $valor2, $valor3)
    {
        self::assertEquals($valor3, $this->_calculadora->somar($valor1, $valor2));
    }    
    
}
