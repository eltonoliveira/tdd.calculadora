<?php

class Calculadora
{
   /**
   * @tutorial O método somar precisará garantir as seguintes somas:
   * - Soma de dois números int positivos - OK
   * - Soma de dois números int negativos - OK
   * - Soma de dois números float positivos com duas casas decimais
   * - Soma de dois números float negativos com duas casas decimais
   * - Soma de duas strings
   *
   * @name somar
   * @param int|float|string $valor1
   * @param int|float|string $valor2
   * @access public
   *
   */
   public function somar($valor1, $valor2)
   {
        return $valor1 + $valor2;
   }

}
