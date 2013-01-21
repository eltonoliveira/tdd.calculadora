<?php
/*
*
*
*/
class Numero
{
    /**
    * Valor do objeto numero
    */
    protected $_valor;
    
    public function __construct($valor)
    {
        $this->_valor = $valor;    
    }
    
    public function getValor()
    {
        return $this->_valor;
    }
}
