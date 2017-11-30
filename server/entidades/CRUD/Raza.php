<?php
class Raza
{
   public $idRaza;
   public $tipoRaza;

   function __construct(int $idRaza,string $tipoRaza){
      $this->idRaza = $idRaza;
      $this->tipoRaza = $tipoRaza;
   }
}
?>