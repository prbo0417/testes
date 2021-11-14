<?php
//espera o path de um arquivo como parâmetro e retorna um objeto
$xml = simplexml_load_file('paises2.xml');

$xml->moeda = 'Novo Real (NR$)';
$xml->geografia->clima = 'temperado';

$xml->addChild('presidente','Chapolin Colorado');

echo $xml->asXML();
file_put_contents('paises2.xml',$xml->asXML());