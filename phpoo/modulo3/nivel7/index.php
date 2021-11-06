<?php
spl_autoload_register( function($class)
{
    if(file_exists($class . '.php'))
    {
        require_once($class . '.php');
    }
});

$classe = $_REQUEST['class'] ?? null;
$metodo = $_REQUEST['method'] ?? null; // Null Coalesce Operator
if (class_exists($classe))
{
    $pagina = new $classe( $_REQUEST );
    if( !empty($metodo) AND method_exists($classe,$metodo) )
    {
        $pagina->$metodo( $_REQUEST );
    }
    $pagina->show();
}
?>