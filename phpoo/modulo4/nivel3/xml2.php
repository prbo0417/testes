
<?php
//espera o path de um arquivo como  parâmetro e retorna um objeto
$xml = simplexml_load_file('paises.xml');

print 'Nome: ' . $xml->nome . '<br>';
print 'Idioma: ' . $xml->idioma . '<br>';
print 'Capital: ' . $xml->capital . '<br>';
print 'Moeda: ' . $xml->moeda . '<br>';
print 'Prefixo: ' . $xml->prefixo . '<br>';