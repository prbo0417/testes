<?php
//espera o path de um arquivo como  parâmetro e retorna um objeto
$xml = simplexml_load_file('paises.xml');
var_dump($xml);