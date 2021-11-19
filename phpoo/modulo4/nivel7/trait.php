<?php
trait ObjectConversionTrait
{
   public function toXML()
   {
        $xml = new SimpleXMLElement('<'.get_class($this).'/>');
        foreach ($this->data as $key=>$value)
        {
            $xml->addChild($key,$value);
        }
        return $xml->asXML();
   } 

   public function toJSON()
   {
        return json_encode($this->data);
   }
}