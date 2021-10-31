<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Cadastro de Pessoas</title>
        <link href="css/form.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            if(!empty($_GET['id']))
            {
                $mysqli = new mysqli("localhost","root","","livros");
                $id = (int) $_GET['id'];
                if($result = $mysqli->query("SELECT * FROM pessoa WHERE id={$id}"))
                {
                    $row = $result->fetch_assoc();
                    //var_dump($row);
                    $id         = $row['id'];
                    $nome       = $row['nome'];
                    $endereco   = $row['endereco'];
                    $bairro     = $row['bairro'];
                    $id_cidade  = $row['id_cidade'];
                    $telefone   = $row['telefone'];
                    $email      = $row['email'];
                }
            }
        ?>
        <form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
            <label>Código</label>
            <input name="id" readonly="1" type="text" style="width:30%" value="<?= $id; ?>">
            <label>Nome</label>
            <input name="nome"  type="text" style="width: 50x;" value="<?= $nome; ?>">
            <label>Endereço</label>
            <input name="endereco"  type="text" style="width: 25%;" value="<?= $endereco; ?>">
            <label>Bairro</label>
            <input name="bairro"  type="text" style="width: 25%;" value="<?= $bairro; ?>">
            <label>Cidade</label>
            <select name="id_cidade">
                <?php
                    require_once("lista_combo_cidades.php");
                    echo lista_combo_cidades($id_cidade);
                ?>
            </select>
            <label>Telefone</label>
            <input name="telefone"  type="text" style="width: 25%;" value="<?php echo $telefone; ?>">
            <label>E-mail</label>
            <input name="email"  type="text" style="width: 25%;" value="<?php echo $email; ?>">
            <input type="submit">
        </form>
    </body>
</html>