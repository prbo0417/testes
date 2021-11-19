<?php
require_once 'record.php';
require_once 'trait.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
    use ObjectConversionTrait;
}

$produto = new Produto;
print $produto->load(10);
echo '<br>';
print $produto->delete(10);
echo '<br>';
$produto->preco = 10;
$produto->descricao = 'Chocolate';
$produto->estoque = 100;
print $produto->save();
echo '<br><br>';
echo 'Usando o TRAIT <br>';
print $produto->toJSON();
echo '<br>';
print $produto->toXML();