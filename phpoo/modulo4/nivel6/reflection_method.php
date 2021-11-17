<?php
require_once 'veiculo.php';

$rm = new ReflectionMethod('Automovel','setPlaca');

print $rm->getName() . '<br>';

print $rm->isPrivate() ? 'É privado' : 'Não é privado';

echo '<br>';

print $rm->isStatic() ? 'É estático' : 'Não é estático';

echo '<br>';

print $rm->isFinal() ? 'É final' : 'Não é final';

echo '<br>';

var_dump($rm->getParameters());