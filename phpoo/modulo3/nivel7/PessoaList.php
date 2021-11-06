<?php
require_once 'classes/Pessoa.php';

class PessoaList
{
    private $html;

    public function __construct()
    {
        $this->html = file_get_contents('html/list.html');
    }

    public function delete($param)
    {
        try
        {
            $id = (int) $param['id'];
            Pessoa::delete($id);
        }
        catch( Exception $e )
        {
            print $e->getMessage();
        }

    }

    public function load()
    {
        try
        {
            $pessoas = Pessoa::all();
            $itens = '';
            foreach($pessoas as $pessoa)
            {
                $item = file_get_contents('html/item.html');
                $item = str_replace('{id}',$pessoa['id'],$item);
                $item = str_replace('{nome}',$pessoa['nome'],$item);
                $item = str_replace('{endereco}',$pessoa['endereco'],$item);
                $item = str_replace('{bairro}',$pessoa['bairro'],$item);
                $item = str_replace('{id_cidade}',$pessoa['id_cidade'],$item);
                $item = str_replace('{telefone}',$pessoa['telefone'],$item);
                $item = str_replace('{email}',$pessoa['email'],$item);
                $itens .= $item;
            }
            $this->html = str_replace('{itens}',$itens,$this->html);
        }
        catch (Exception $e )
        {
            print $e->getMessage();
        }
    }
    
    public function show()
    {
        $this->load();
        print $this->html;    
    }
}
?>