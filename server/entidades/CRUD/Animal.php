<?php
class Animal
{
   public $idAnimal;
   public $idTipoMascota;
   public $idSalud;
   public $idTamano;
   public $nombre;
   public $peso;
   public $edad;
   public $descripcion;
   public $imagen;

   function __construct(int $idAnimal,int $idTipoMascota,int $idSalud,int $idTamano,string $nombre,float $peso,int $edad,string $descripcion,string $imagen){
      $this->idAnimal = $idAnimal;
      $this->idTipoMascota = $idTipoMascota;
      $this->idSalud = $idSalud;
      $this->idTamano = $idTamano;
      $this->nombre = $nombre;
      $this->peso = $peso;
      $this->edad = $edad;
      $this->descripcion = $descripcion;
      $this->imagen = $imagen;
   }
}
?>