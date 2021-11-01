<?php
function get_pessoa($id)
{
    $mysqli = new mysqli("localhost","root","","livros");
    $result = $mysqli->query("SELECT * FROM pessoa WHERE id={$id}");
    $pessoa = $result->fetch_assoc();
    $mysqli = null;
    return $pessoa;
}

function exclui_pessoa($id)
{
    $mysqli = new mysqli("localhost","root","","livros");
    $result = $mysqli->query("DELETE FROM pessoa WHERE id={$id}");
    $mysqli = null;
    return $result;
}

function insert_pessoa($pessoa)
{
    $mysqli = new mysqli("localhost","root","","livros");
    $sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)";
    $sql .= " VALUES('{$pessoa['id']}',
                    '{$pessoa['nome']}',
                    '{$pessoa['endereco']}',
                    '{$pessoa['bairro']}',
                    '{$pessoa['telefone']}',
                    '{$pessoa['email']}',
                    '{$pessoa['id_cidade']}')";
    $result = $mysqli->query($sql);
    $mysqli = null;
    return $result;
}

function update_pessoa($pessoa)
{
    $mysqli = new mysqli("localhost","root","","livros");
    $sql = "UPDATE pessoa SET ";
    $sql .= "nome='{$pessoa['nome']}',
             endereco='{$pessoa['endereco']}',
             bairro='{$pessoa['bairro']}',
             telefone='{$pessoa['telefone']}',
             email='{$pessoa['email']}',
             id_cidade='{$pessoa['id_cidade']}' WHERE id='{$pessoa['id']}'";
    
    $result = $mysqli->query($sql);
    $mysqli = null;
    return $result;
}

function lista_pessoas()
{
    $mysqli = new mysqli("localhost","root","","livros");
    $result = $mysqli->query("SELECT * FROM pessoa ORDER BY id");
    $list = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli = null;
    return $list;
}

function get_next_pessoa()
{
    $mysqli = new mysqli("localhost","root","","livros");
    $result = $mysqli->query("SELECT MAX(id) AS next FROM pessoa WHERE id={$id}");
    $pessoa = $result->fetch_assoc();
    $next = (int)$pessoa['next'] + 1;
    $mysqli = null;
    return $next;   
}
?>