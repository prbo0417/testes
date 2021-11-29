<?php
require_once 'classes/record.php';

//simulacao do algoritmo complexo da classe desenvolvida por terceiro
//simulacao da classe pessoa que precisa de uma outra classe 
class  JSONExporter
{
    public function export($data)
    {
        return json_encode($data);
    }
}

/*
    * nesta estrutura a classe Pessoa tem uma depedencia concreta
    * em relação a classe JSONExporter
    * ou seja, uma dependência fixa
    * uma depepência criada em tempo de desenvolvimento da classe
*/
class Pessoa extends Record
{
    const TABLENAME = 'pessoas';

    public function toJSON()
    {
        //basicamente instancia a classe de terceiro
        $je = new JSONExporter;
        return $je->export($this->data);
    }
}

/*
    * quem está chamando não tem como alterar essa dependência
    * e por exemplo existirá um método mais eficiente de
    * exportar JSON e o desenvolvedor cliente da aplicação não vai poder alterar
    * essa dependência fixa

    * de que maneira essa situação poderia ser mais flexível,
    * de forma que o programador que está chamando as classes pudesse
    * em tempo de execução poder escolher utilizar outra funcionalidade de uma 
    * outra estrutura de classes para exportar dados em JSON

*/
$p = new Pessoa;
$p->nome = 'Maria';
$p->endereco = 'Rua das Flores';
$p->numero = '123';

print $p->toJSON();