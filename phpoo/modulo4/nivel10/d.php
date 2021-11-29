<?php
require_once 'a.php';
require_once 'b.php';

//usando alias 'apelido' para o escopo do namespace\classe
use Application\Form as X;
use Components\Form as Y;

var_dump(new Y);