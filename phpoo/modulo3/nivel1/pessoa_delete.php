<?php
//ALT + SHIFT + A COMENTAR E DESCOMENTAR CODIGO
$dados = $_GET;
if($dados['id'])
{
    $mysqli = new mysqli("localhost", "root","","livros");
    // Check connection
    if ($mysqli->connect_error) 
    {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $id     = (int)$dados['id'];
    $sql    = "DELETE FROM pessoa WHERE id='{$id}'";
    
    if($result = $mysqli->query($sql))
    {
        print 'Registro deletado com sucesso';
    }
    else
    {
        print "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>