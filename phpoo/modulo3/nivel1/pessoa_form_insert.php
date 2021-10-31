<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Cadastro de Pessoas</title>
        <link href="css/form.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
            <label>Código</label>
            <input name="id" readonly="1" type="text" style="width:30%">
            <label>Nome</label>
            <input name="nome"  type="text" style="width: 50x;">
            <label>Endereço</label>
            <input name="endereco"  type="text" style="width: 25%;">
            <label>Bairro</label>
            <input name="bairro"  type="text" style="width: 25%;">
            <label>Cidade</label>
            <select name="id_cidade">
                <?php
                    require_once("lista_combo_cidades.php");
                    echo lista_combo_cidades();
                ?>
            </select>
            <label>Telefone</label>
            <input name="telefone"  type="text" style="width: 25%;">
            <label>E-mail</label>
            <input name="email"  type="text" style="width: 25%;">
            <input type="submit">
        </form>
    </body>
</html>