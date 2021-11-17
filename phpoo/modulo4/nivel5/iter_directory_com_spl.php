<?php
//Iterator - classe que percorre certa estrutura
foreach( new DirectoryIterator('D:/wamp64/www/testes/phpoo/modulo4/nivel5') as $file )
{
    print (string) $file . '<br>';
    print 'Nome: ' . $file->getFileName() . '<br>';
    print 'Extensão' . $file->getExtension() .  '<br>'; 
    print '<br><br>';
}