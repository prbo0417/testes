<?php
$dados = $_POST;
$mysqli = new mysqli("localhost", "root","","livros");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
 }
$result = $mysqli->query("SELECT MAX(id) as next FROM pessoa");
$row = $result->fetch_assoc();
$next = (int)$row['next'] + 1; //casting string to int

$sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)";
$sql .= " VALUES('{$next}',
                 '{$dados['nome']}',
                 '{$dados['endereco']}',
                 '{$dados['bairro']}',
                 '{$dados['telefone']}',
                 '{$dados['email']}',
                 '{$dados['id_cidade']}')";

if($result = $mysqli->query($sql))
{
    print 'Registro inserido com sucesso';
}
else
{
    print "Error: " . $sql . "<br>" . $mysqli->error;
}

?>