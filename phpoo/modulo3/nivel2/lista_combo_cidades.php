<?php
function lista_combo_cidades($id_cidade = null)
{
    $mysqli = new mysqli("localhost", "root","","livros");
    // Check connection
    if ($mysqli->connect_error) {
       die("Connection failed: " . $mysqli->connect_error);
    }
    $output = "";
    if ($result = $mysqli->query("select id, nome from cidade")) 
    {
        while ($row = $result->fetch_assoc()) 
        {
           $id = $row['id'];
           $nome = $row['nome'];
           $selected = ($id == $id_cidade ? "selected=1" : "");
           $output .= "<option value='{$id}' {$selected}>{$nome}</option>";
        }
        /* free result set */
        $result->close();
    }
    /* close connection */
    $mysqli->close();
    return $output;
}
?>