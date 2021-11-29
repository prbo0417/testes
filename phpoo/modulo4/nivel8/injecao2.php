<?php
require_once 'classes/record.php';

// 1- simulacao do algoritmo complexo da classe desenvolvida por terceiro
// simulacao da classe pessoa que precisa de uma outra classe 

/*
    * essa interface implenta o contrato, ou seja,
    * a definição do método necessário para que
    * o contrato seja validado
*/
interface ExporterInterface
{
    public function export($data);
}

/*
    ** 7 - Neste ponto a classe JSONExporter implementa a interface ExportInterface
    * ou seja, ele assina o contrato, se comprometendo em ter uma funcionalidade
    * com a qual a interface define
*/
class JSONExporter implements ExporterInterface // 7
{
    public function export($data)
    {
        return json_encode($data);
    }
}

/*
    * 2- nesta estrutura a classe Pessoa tem uma depedencia concreta
    * em relação a classe JSONExporter
    * ou seja, uma dependência fixa
    * uma depepência criada em tempo de desenvolvimento da classe
*/
class Pessoa extends Record
{
    const TABLENAME = 'pessoas';

    /*
        ** 4- INJEÇÃO DE DEPENDÊNCIA
        * no lugar de colocarmos explicitamente a instância da classe 
        * que será executada, é passado a classe por parâmetro
        * no lugar de chamar o método de toJSON, como será um método
        * de exportação também se faz necessário por semântica
        * alterar o nome do método, pois o mesmo pode chamar classes de 
        * funcionalidades que podem exportar para outros tipos (XML, JSON, CSV, ...)

        * 7 - Força que o objeto passado como parâmetro tenha validado o contrato validado,
        * ou seja, tenha o métdo export implementado em sua extrutura
    */
    public function export(ExporterInterface $exporter) //-7 
    { 
        /*
            * 6- neste ponto precisa garantir que o objeto passado por parâmetro
            * exista e também que possua o método a ser chamado
            * um conceito já visto na OO que serve para garantir que objetos 
            * tenham determinados métodos
            * A INTERFACE é um contrato de prestação de serviços entre 2 classes
            * na qual uma classe pode exigir que uma outra classe tenha um determinado
            * método
        */
        return $exporter->export($this->data);
    }
}

/*
    *  3- quem está chamando não tem como alterar essa dependência
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

/* 
    * 5- aqui será passado para o método a classe que tem a inteligência
    * para fazer a exportação daqueles dados
    * uma maneira mais fixa pois as classes precisam ter o mesmo nome de método
    **
    * 8 - O erro será dado já na chamada da classe de terceiro e não posteriormente
    * a interface garante a compatibilidade entre a classe do desenvolvedor cliente 
    * com a classe desenvolvida por terceiros
    * a Injeção de Dependência implementa um outro padrão conhecido como 
    * inversão de controle, ou seja, coloca o desenvolvedor cliente (que chama as
    * funcionalidades no controle da situação)
*/
print $p->export( new JSONExporter );