<?php
    $pessoa = [];
    $pessoa['id']         = '';
    $pessoa['nome']       = '';
    $pessoa['endereco']   = '';
    $pessoa['bairro']     = '';
    $pessoa['id_cidade']  = '';
    $pessoa['telefone']   = '';
    $pessoa['email']      = '';
    if(!empty($_REQUEST['action']))
    {
        $mysqli = new mysqli("localhost","root","","livros");
        if(!empty($_GET['id']) and $_REQUEST['action']=='edit')
        {
            $id = (int) $_GET['id'];
            if($result = $mysqli->query("SELECT * FROM pessoa WHERE id={$id}"))
            {
                $pessoa = $result->fetch_assoc();
            }
        }
        else if($_REQUEST['action']=='save')
        {
            $id         = $_POST['id'];
            $pessoa     = $_POST;
            if(empty( $_POST['id']))
            {
                $result = $mysqli->query("SELECT MAX(id) as next FROM pessoa");
                $row = $result->fetch_assoc();
                $id = (int)$row['next'] + 1; //casting string to int
                $sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)";
                $sql .= " VALUES('{$id}',
                                '{$pessoa['nome']}',
                                '{$pessoa['endereco']}',
                                '{$pessoa['bairro']}',
                                '{$pessoa['telefone']}',
                                '{$pessoa['email']}',
                                '{$pessoa['id_cidade']}')";

                $result = $mysqli->query($sql);
                print ($result) ? "Registro inserido com sucesso" : $mysqli->error;
            }
            else //UPDATE
            {
                $sql = "UPDATE pessoa SET ";
                $sql .= "nome='{$pessoa['nome']}',
                         endereco='{$pessoa['endereco']}',
                         bairro='{$pessoa['bairro']}',
                         telefone='{$pessoa['telefone']}',
                         email='{$pessoa['email']}',
                         id_cidade='{$pessoa['id_cidade']}' WHERE id='{$id}'";
                
                $result = $mysqli->query($sql);
                print ($result) ? "Registro alterado com sucesso" : $mysqli->error;
            }
        }
        $mysqli = null;
    }
require_once("lista_combo_cidades.php");
$cidades = lista_combo_cidades($pessoa['id_cidade']);

//lê um arquivo e o retorna em forma de string
$form = file_get_contents('html/form.html');
//substituir as marcações pelas variáveis dinâmicas
$form = str_replace('{id}',$pessoa['id'],$form);
$form = str_replace('{nome}',$pessoa['nome'],$form);
$form = str_replace('{endereco}',$pessoa['endereco'],$form);
$form = str_replace('{bairro}',$pessoa['bairro'],$form);
$form = str_replace('{telefone}',$pessoa['telefone'],$form);
$form = str_replace('{email}',$pessoa['email'],$form);
$form = str_replace('{id_cidade}',$pessoa['id_cidade'],$form);
$form = str_replace('{cidades}',$cidades,$form);
print $form;
?>
