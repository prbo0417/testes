<?php
//espera o path de um arquivo como  parâmetro e retorna um objeto
$xml = simplexml_load_file('paises.xml');

foreach ($xml->children() as $elemento => $valor)
{
    print $elemento . ': ' . $valor . '<br>';
}