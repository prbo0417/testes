<?php
//ALT + SHIFT + A COMENTAR E DESCOMENTAR CODIGO
$dados = $_POST;
if($dados['id'])
{
    $mysqli = new mysqli("localhost", "root","","livros");
    // Check connection
    if ($mysqli->connect_error) 
    {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    $sql = "UPDATE pessoa SET ";
    $sql .= "nome='{$dados['nome']}',endereco='{$dados['endereco']}',bairro='{$dados['bairro']}',
            telefone='{$dados['telefone']}',
            email='{$dados['email']}',
            id_cidade='{$dados['id_cidade']}' WHERE id='{$dados['id']}'";
    
    if($result = $mysqli->query($sql))
    {
        print 'Registro alterado com sucesso';
    }
    else
    {
        print "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>