<?php
class Salud
{
   public $idSalud;
   public $estado;

   function __construct(int $idSalud,string $estado){
      $this->idSalud = $idSalud;
      $this->estado = $estado;
   }
}
?>