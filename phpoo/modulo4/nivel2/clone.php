<?php
class Titulo
{
   public $codigo,$dt_vencimento,$valor,$juros,$multa;

   /*
        * modificar o comportamento quando o objeto é clonado
        ** escolher clonar apenas alguns atributos do objeto
   */
   public function __clone()
   {
        $this->codigo = null;
   }
}

$titulo = new Titulo;
$titulo->codigo = 1;
$titulo->dt_vencimento = '20118-10-10';
$titulo->valor = 100;
$titulo->juros = 0.1;
$titulo->multa = 1;

//cria uma duplicata do objeto $titulo, onde será criada uma cópia da região da memória
$titulo2 = clone($titulo);
$titulo2->valor = 200;

var_dump($titulo);
var_dump($titulo2);