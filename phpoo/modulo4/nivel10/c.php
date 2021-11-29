<?php
require_once 'a.php';

//tenta buscar a classe Form no escopo global da aplicação
//new Form;

//declaração do nome completamente qualificado da clase Form
//var_dump(new \Application\Form);

//usando a clausula use para informar o escopo onde a classe está inserida 
//declaração do nome resumido
use Application\Form;
use Application\Field;
var_dump(new Form);
var_dump(new Field);

