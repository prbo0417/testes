<?php
$path = 'D:/wamp64/www/testes';
//cria um objeto splFileInfo recursivo (array, arvore ou diretorio)
foreach (new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path,RecursiveDirectoryIterator::SKIP_DOTS))
    as $item)
{
    print (string) $item . '<br>';
}