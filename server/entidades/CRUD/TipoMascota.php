<?php
class TipoMascota
{
   public $idTipoMascota;
   public $mascota;
   public $idRaza;

   function __construct(int $idTipoMascota,string $mascota,int $idRaza){
      $this->idTipoMascota = $idTipoMascota;
      $this->mascota = $mascota;
      $this->idRaza = $idRaza;
   }
}
?>