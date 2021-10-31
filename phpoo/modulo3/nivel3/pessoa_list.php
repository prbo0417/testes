<html>
<head>
    <meta charset='utf-8'>
    <title>Listagem de Pessoas</title>
    <link href="css/list.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysqli = new mysqli("localhost","root","","livros");
                if(!empty($_GET['action']) and $_GET['action']=='delete')
                {
                    $id = $_GET['id'];
                   $mysqli->query("DELETE FROM pessoa WHERE id='{$id}'");
                }
                if($result = $mysqli->query("SELECT * FROM pessoa ORDER BY id"))
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id         = $row['id'];
                        $nome       = $row['nome']; 
                        $endereco   = $row['endereco'];
                        $bairro     = $row['bairro'];
                        $id_cidade  = $row['id_cidade'];
                        $telefone   = $row['telefone'];
                        $email      = $row['email'];
                        $linkImg = "<img src='images/edit.svg' style='width:17px;'>";
                                                
                        print "<tr>";
                        print "<td><a href='pessoa_form.php?action=edit&id={$id}'><img src='images/edit.svg' style='width:17px;'></a></td>";
                        print "<td><a href='pessoa_list.php?action=delete&id={$id}'><img src='images/remove.svg' style='width:17px;'></a></td>";
                        print "<td>{$id}</td>";
                        print "<td>{$nome}</td>";
                        print "<td>{$endereco}</td>";
                        print "<td>{$bairro}</td>";
                        print "<td>{$id_cidade}</td>";
                        print "<td>{$telefone}</td>";
                        print "<td>{$email}</td>";
                        print "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    <button onclick="window.location='pessoa_form.php'";>
        <img src="images/insert.svg" style="width:17px;"> Inserir
    </button>
</body>
</html>