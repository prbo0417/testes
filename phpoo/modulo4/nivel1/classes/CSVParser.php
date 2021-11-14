<?php
class CSVParser
{
    private $filename;
    private $separador;
    private $counter; //count the current line of the read file
    private $data;
    private $header;

    /*
        * will only receive the information
    */
    public function __construct($filename,$separador=",")
    {
        $this->filename     = $filename;
        $this->separador    = $separador;
        $this->counter       = 1;
    }

    /*
        * read from csv file
    */
    public function parse()
    {
        //check if the file exists
        if (!file_exists($this->filename))
        {
            //interrupts the program completely at this point
            //die("Arquivo {$this->filename} não existe");
            
            //there can be several different situations,
            // but they all fall under a boolean flag
            //return FALSE;

            //Exception Control
            /*
                * Throws an exception object
                * In the calling program it is necessary to use the try catch block
            */
            throw new Exception("Arquivo {$this->filename} não encontrado");
        }
         //check if file has read permission
         if (!is_readable($this->filename))
         {
            //die("Arquivo {$this->filename} sem leitura");
            //return FALSE;
            throw new Exception("Arquivo {$this->filename} não pode ser lido");
         }
         
        //file method = returns file attributes in a data vector  
        $this->data = file($this->filename);
        //only the file headers
        $this->header = str_getcsv($this->data[0],$this->separador);
        return TRUE;
    }

    /*
        * returns one line at a time
    */
    public function fetch()
    {
        if(isset($this->data[$this->counter]))
        {
            $row = str_getcsv($this->data[$this->counter++],$this->separador);
            //return an associative vector
            foreach ($row as $key =>$value)
            {
                $row[$this->header[$key]] = $value; 
            }
            return $row;
        }
    }
}
