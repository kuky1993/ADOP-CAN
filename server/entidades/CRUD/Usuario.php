<?php
class Usuario
{
   public $idUsuario;
   public $cedula;
   public $nombres;
   public $apellidos;
   public $direccion;
   public $correo;
   public $telefono;

   function __construct(int $idUsuario,string $cedula,string $nombres,string $apellidos,string $direccion,string $correo,string $telefono){
      $this->idUsuario = $idUsuario;
      $this->cedula = $cedula;
      $this->nombres = $nombres;
      $this->apellidos = $apellidos;
      $this->direccion = $direccion;
      $this->correo = $correo;
      $this->telefono = $telefono;
   }
}
?>