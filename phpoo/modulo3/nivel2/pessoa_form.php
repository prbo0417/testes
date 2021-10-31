<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Cadastro de Pessoas</title>
        <link href="css/form.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
           $id         = '';
           $nome       = '';
           $endereco   = '';
           $bairro     = '';
           $id_cidade  = '';
           $telefone   = '';
           $email      = '';
            if(!empty($_REQUEST['action']))
            {
                $mysqli = new mysqli("localhost","root","","livros");
                if(!empty($_GET['id']) and $_REQUEST['action']=='edit')
                {
                    $id = (int) $_GET['id'];
                    if($result = $mysqli->query("SELECT * FROM pessoa WHERE id={$id}"))
                    {
                        $row = $result->fetch_assoc();
                        $id         = $row['id'];
                        $nome       = $row['nome'];
                        $endereco   = $row['endereco'];
                        $bairro     = $row['bairro'];
                        $id_cidade  = $row['id_cidade'];
                        $telefone   = $row['telefone'];
                        $email      = $row['email'];
                    }
                }
                else if($_REQUEST['action']=='save')
                {
                    $id         = $_POST['id'];
                    $nome       = $_POST['nome'];
                    $endereco   = $_POST['endereco'];
                    $bairro     = $_POST['bairro'];
                    $id_cidade  = $_POST['id_cidade'];
                    $telefone   = $_POST['telefone'];
                    $email      = $_POST['email'];
                    if(empty( $_POST['id']))
                    {
                        $result = $mysqli->query("SELECT MAX(id) as next FROM pessoa");
                        $row = $result->fetch_assoc();
                        $id = (int)$row['next'] + 1; //casting string to int
                        $sql = "INSERT INTO pessoa(id,nome,endereco,bairro,telefone,email,id_cidade)";
                        $sql .= " VALUES('{$id}',
                                        '{$nome}',
                                        '{$endereco}',
                                        '{$bairro}',
                                        '{$telefone}',
                                        '{$email}',
                                        '{$id_cidade}')";

                        $result = $mysqli->query($sql);
                        print ($result) ? "Registro inserido com sucesso" : $mysqli->error;
                    }
                    else //UPDATE
                    {
                        $sql = "UPDATE pessoa SET ";
                        $sql .= "nome='{$nome}',endereco='{$endereco}',bairro='{$bairro}',
                                telefone='{$telefone}',
                                email='{$email}',
                                id_cidade='{$id_cidade}' WHERE id='{$id}'";
                        
                        $result = $mysqli->query($sql);
                        print ($result) ? "Registro alterado com sucesso" : $mysqli->error;
                    }
                }
                $mysqli = null;
            }
        ?>
        <form enctype="multipart/form-data" method="post" action="pessoa_form.php?action=save">
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