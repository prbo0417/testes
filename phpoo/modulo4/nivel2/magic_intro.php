<?php
class Titulo
{
    private $dt_vencimento;
    private $valor;

    /*
        * magic method called when 
        * instantiating a class
        * when giving a "new" to the object
    */
    public function __construct($dt_vencimento,$valor)
    {
        $this->dt_vencimento = $dt_vencimento;
        $this->valor = $valor;

        print('método construtor...<br>');
    }

    /*
        * intercept attempts to read  private properties of a class
    */
    public function __get($propriedade)
    {
        if ($propriedade == 'valor')
        {
            return $this->$propriedade * 1.2 . "<br>";
        }
        print "Tentou acessar o valor da propridade {$propriedade} <br>";
    }

    /*
        * intercept attempts to access private properties of a class
    */
    public function __set($propriedade,$conteudo)
    {
        if ($propriedade == 'valor')
        {
            $this->$propriedade = $conteudo * 1.5;
        }
        print "Tentou armazenar um valor na propridade {$propriedade} <br>";
    }

    /*
        * magic method called when the execution of the class
        * ends or when its variable is destroyed by the 
        * unset method
    */
    public function __destruct()
    {
        print('método destrutor...<br>');   
    }
}

$tit = new Titulo('2018-10-10',100);
print $tit->valor;
print $tit->teste;
print $tit->valor = 200;
var_dump($tit);
unset($tit);