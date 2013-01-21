<?php

class Calculadora
{
   /**
   * @tutorial O método somar precisará garantir as seguintes somas:
   * - Soma de dois números int positivos - OK
   * - Soma de dois números int negativos - OK
   * - Soma de dois números float positivos com duas casas decimais - OK
   * - Soma de dois números float negativos com duas casas decimais - OK
   * - Soma de duas strings - OK
   * - Soma de um objeto Numero com um int - 
   *
   * @name somar
   * @param int|float|string $valor1
   * @param int|float|string $valor2
   * @access public
   *
   */
   public function somar($valor1, $valor2)
   {
        if(is_string($valor1) || is_string($valor2))
        {
            return $valor1 . $valor2;
        }
        
        if($valor1 instanceof Numero)
        {
            return $valor1->getValor() + $valor2;
        }
        
        return $valor1 + $valor2;
   }

}
