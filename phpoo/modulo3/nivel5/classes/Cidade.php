<?php
class Cidade
{
    public static function all()
    {
        $conn = new PDO("mysql:host='localhost';dbname='livros'",'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $result = $conn->query("SELECT * FROM cidade ORDER BY id");
        return $result->fetchAll();
    }
}
?>