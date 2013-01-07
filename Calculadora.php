<?php

class Calculadora
{
   /**
   * @tutorial O método somar precisará garantir as seguintes somas:
   * - Soma de dois números inteiros positivos - OK
   * - Soma de dois números inteiros positivos e/ou negativos
   * - Soma de dois números reais (float) positivos com duas casas decimais
   * - Soma de dois números reais (float) positivos e/ou negativos com duas casas decimais
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
