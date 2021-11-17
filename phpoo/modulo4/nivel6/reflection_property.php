<?php
require_once 'veiculo.php';

$rp = new ReflectionProperty('Automovel','placa');

print $rp->getName()  . '<br>';

print $rp->isPrivate() ? 'é private' : 'não é private';

print '<br>';

print $rp->isStatic() ? 'é static' : 'não é static';

print '<br>';