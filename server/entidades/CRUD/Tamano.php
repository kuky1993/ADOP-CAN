<?php
class Tamano
{
   public $idTamano;
   public $tamano;

   function __construct(int $idTamano,string $tamano){
      $this->idTamano = $idTamano;
      $this->tamano = $tamano;
   }
}
?>