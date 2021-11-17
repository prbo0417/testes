<?php
require_once 'veiculo.php';

$rc = new ReflectionClass('Automovel');

//return a reflection method list
var_dump($rc->getMethods());
//return a reflection properties list
var_dump($rc->getProperties());
//return the parent class name
var_dump($rc->getParentClass());

echo '<br>';

foreach( $rc->getMethods() as $method )
{
    echo $method->getName() . '<br>';
    print_r($method->getParameters()) . '<br><br>';
}


