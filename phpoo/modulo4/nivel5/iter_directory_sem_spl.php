<?php
$dir = opendir('D:/wamp64/www/testes/phpoo/modulo4/nivel5');
while ( $arquivo = readdir($dir) )
{
    print $arquivo . '<br>';
}
closedir($dir);