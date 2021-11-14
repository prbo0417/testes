<?php
require_once 'classes/CSVParser.php';

$csv = new CSVParser('clientes.csv',';');

try
{
    $csv->parse();
    echo '<pre>';
    while ($row = $csv->fetch())
    {
        //var_dump($row);
        print $row['Cliente'] . ' - ' . $row['Cidade'] . '<br>';
    }
    echo '</pre>';
}
catch (Exception $e)
{
    echo $e->getMessage();
}
// The program continues execution normally
echo "<br> Continua o programa ...";