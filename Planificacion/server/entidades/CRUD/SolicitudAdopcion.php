<?php
class SolicitudAdopcion
{
   public $idSolicitud;
   public $idAnimal;
   public $idUsuario;

   function __construct(int $idSolicitud,int $idAnimal,int $idUsuario){
      $this->idSolicitud = $idSolicitud;
      $this->idAnimal = $idAnimal;
      $this->idUsuario = $idUsuario;
   }
}
?>