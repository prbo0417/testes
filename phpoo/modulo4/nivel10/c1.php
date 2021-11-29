<?php
namespace Library\Widgets;

/*
    * Simulacao de uma classe que depende
    * de outras 3 classes para funcionar
    **
    * Se nao tomar alguns cuidados 
    * essa classe nao vai funcionar pois
    * algumas classes estao em namespace diferente ou escopo diferente
*/

//sempre que for usar uma classe que faz parte de outro namespace
//se faz necessario a declaração de uso
use Library\Container\Table;
//Outra maneira de declarar classe do php é fazer a declaracao de uso
//somente da classe, ou seja, é do escopo global, uma classe do PHP
use SplFileInfo;
class Form
{
    public function fazAlgo(Field $x)
    {

    }

    public function show()
    {
        new Table;
        /*new \SplFileInfo... Busca essa classe no escopo global*/
        //new \SplFileInfo('c1.php');
        new SplFileInfo('c1.php');
    }
}
