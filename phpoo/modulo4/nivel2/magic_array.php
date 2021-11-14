<?php
/*
    * Class that instead of writing its distinct properties in distinct attributes
    * writes in an array. For this purpose, magical methods are used that intercept
    * the recording, access, access, existence and destricton of a property. 
    * Often used database manipulation technique because it facilitates the export
    * and manipulation of data
*/
class Titulo
{
    private $data;
    
    public function __set($propriedade,$conteudo)
    {
        $this->data[$propriedade] = $conteudo;
    }

    public function __get($propriedade)
    {
        return $this->data[$propriedade];
    }

    /*
        * intercepts a property the program is trying to access 
        * via the isset function an returns a boolean value
    */
    public function __isset($propriedade)
    {
        return isset($this->data[$propriedade]);
    }

    /*
        * intercpets a property the program is trying to access through the
        * unset function and eliminates the value if it exists
    */
    public function __unset($propriedade)
    {
       unset($this->data[$propriedade]);
    }
}

$tit = new Titulo;
$tit->valor = 100;
$tit->nome = 'Paulo Oliveira';
//var_dump($tit->valor);
//var_dump($tit);
/* if (isset($tit->valor))
{
    print "tem valor";
} */
unset($tit->valor);
var_dump($tit);