<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/Animal.php');
class ControladorAnimal extends ControladorBase
{
   function crear(Animal $animal)
   {
      $sql = "INSERT INTO Animal (idAnimal,idTipoMascota,idSalud,idTamano,nombre,peso,edad,descripcion,imagen) VALUES (?,?,?,?,?,?,?,?,?);";
      $parametros = array($animal->idAnimal,$animal->idTipoMascota,$animal->idSalud,$animal->idTamano,$animal->nombre,$animal->peso,$animal->edad,$animal->descripcion,$animal->imagen);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(Animal $animal)
   {
      $parametros = array($animal->idAnimal,$animal->idTipoMascota,$animal->idSalud,$animal->idTamano,$animal->nombre,$animal->peso,$animal->edad,$animal->descripcion,$animal->imagen,$animal->id);
      $sql = "UPDATE Animal SET idAnimal = ?,idTipoMascota = ?,idSalud = ?,idTamano = ?,nombre = ?,peso = ?,edad = ?,descripcion = ?,imagen = ? WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function borrar(int $id)
   {
      $parametros = array($id);
      $sql = "DELETE FROM Animal WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function leer($id)
   {
      if ($id==""){
         $sql = "SELECT * FROM Animal;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Animal WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Animal LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Animal;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM Animal WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Animal WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Animal WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Animal WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}