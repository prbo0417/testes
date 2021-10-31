
<?php
    $mysqli = new mysqli("localhost","root","","livros");
    if(!empty($_GET['action']) and $_GET['action']=='delete')
    {
        $id = $_GET['id'];
        $mysqli->query("DELETE FROM pessoa WHERE id='{$id}'");
    }
    if($result = $mysqli->query("SELECT * FROM pessoa ORDER BY id"))
    {
        $itens = '';
        while($row = $result->fetch_assoc())
        {
            $item = file_get_contents('html/item.html');
            $item = str_replace('{id}',$row['id'],$item);
            $item = str_replace('{nome}',$row['nome'],$item);
            $item = str_replace('{endereco}',$row['endereco'],$item);
            $item = str_replace('{bairro}',$row['bairro'],$item);
            $item = str_replace('{id_cidade}',$row['id_cidade'],$item);
            $item = str_replace('{telefone}',$row['telefone'],$item);
            $item = str_replace('{email}',$row['email'],$item);
            $itens .= $item;
        }
        $list = file_get_contents('html/list.html');
        $list = str_replace('{itens}',$itens,$list);

        print $list;
    }
?>
       