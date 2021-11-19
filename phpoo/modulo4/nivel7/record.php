<?php
/*
    * representar um registro de uma entidade
    * serve para retenção de informações e 
    * geração de comandos de banco de dados
    * princípio de responsabilidade única
*/
class Record
{
    protected $data;

    public function __set($prop,$value)
    {
        $this->data[$prop] = $value;
    }

    public function __get($prop)
    {
        return $this->data[$prop];
    }

    public function save()
    {
        return "INSERT INTO " . $this::TABLENAME . "(`" . 
        implode("`,`",array_keys($this->data)) . "`) VALUES ('" .
        implode("','",array_values($this->data)) . "')";
    }

    public function delete($id)
    {
        return "DELETE FROM " . $this::TABLENAME . " WHERE id=" . $id;
    }

    public function load($id)
    {
        return "SELECT * FROM " . $this::TABLENAME . " WHERE id=" . $id;
    }
}