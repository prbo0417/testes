<?php
class Titulo
{
   public $codigo,$dt_vencimento,$valor,$juros,$multa;
}

$titulo = new Titulo;
$titulo->codigo = 1;
$titulo->dt_vencimento = '20118-10-10';
$titulo->valor = 100;
$titulo->juros = 0.1;
$titulo->multa = 1;

//aponta a variável $titulo2 para a mesma regiao da memoria a variável $titulo
$titulo2 = $titulo;
$titulo2->valor = 200;

var_dump($titulo);
var_dump($titulo2);