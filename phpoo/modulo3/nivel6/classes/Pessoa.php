<?php
class Pessoa
{
    private static $conn;

    /*
        * realizar a abertura de conexao somente uma vez dentro da classe
        * retirar os dados explicitos de conexão
        * configurar arquivo apache2.conf
        ** para que o usuário não tenha acesso aos arquivos .ini
    */
    public static function getConnection()
    {
        if(empty(self::$conn))
        {
            $ini = parse_ini_file('config/livro.ini');
            $host = $ini['host'];
            $name = $ini['name'];
            $user = $ini['user'];
            $pass = $ini['pass'];

            self::$conn = new PDO("mysql:host={$host};dbname={$name}","{$user}","{$pass}");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
    
    public static function find($id)
    {
        $conn = self::getConnection();
        $result = $conn->query("SELECT * FROM pessoa WHERE id={$id}");
        return $result->fetch();
    }

    public static function delete($id)
    {
        $conn = self::getConnection();
        $result = $conn->query("DELETE FROM pessoa WHERE id={$id}");
        return $result;
    }

    public static function all()
    {
        $conn = self::getConnection();
        $result = $conn->query("SELECT * FROM pessoa ORDER BY id");
        return $result->fetchAll();
    }

    public static function save($pessoa)
    {
        $conn = self::getConnection();
        if(empty($pessoa['id']))
        {
            $result = $conn->query("SELECT MAX(id) as next FROM pessoa");
            $row = $result->fetch();
            $pessoa['id'] = (int)$row['next'] + 1;
            $sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)";
            $sql .= " VALUES('{$pessoa['id']}',
                            '{$pessoa['nome']}',
                            '{$pessoa['endereco']}',
                            '{$pessoa['bairro']}',
                            '{$pessoa['telefone']}',
                            '{$pessoa['email']}',
                            '{$pessoa['id_cidade']}')";
        }
        else
        {
            $sql = "UPDATE pessoa SET ";
            $sql .= "nome='{$pessoa['nome']}',
                    endereco='{$pessoa['endereco']}',
                    bairro='{$pessoa['bairro']}',
                    telefone='{$pessoa['telefone']}',
                    email='{$pessoa['email']}',
                    id_cidade='{$pessoa['id_cidade']}' WHERE id='{$pessoa['id']}'";
        }
        return $conn->query($sql);
    }
}
?>