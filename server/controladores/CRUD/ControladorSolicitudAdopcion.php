<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/SolicitudAdopcion.php');
class ControladorSolicitudAdopcion extends ControladorBase
{
   function crear(SolicitudAdopcion $solicitudadopcion)
   {
      $sql = "INSERT INTO SolicitudAdopcion (idSolicitud,idAnimal,idUsuario) VALUES (?,?,?);";
      $parametros = array($solicitudadopcion->idSolicitud,$solicitudadopcion->idAnimal,$solicitudadopcion->idUsuario);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(SolicitudAdopcion $solicitudadopcion)
   {
      $parametros = array($solicitudadopcion->idSolicitud,$solicitudadopcion->idAnimal,$solicitudadopcion->idUsuario,$solicitudadopcion->id);
      $sql = "UPDATE SolicitudAdopcion SET idSolicitud = ?,idAnimal = ?,idUsuario = ? WHERE id = ?;";
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
      $sql = "DELETE FROM SolicitudAdopcion WHERE id = ?;";
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
         $sql = "SELECT * FROM SolicitudAdopcion;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM SolicitudAdopcion WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM SolicitudAdopcion LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM SolicitudAdopcion;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM SolicitudAdopcion WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM SolicitudAdopcion WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM SolicitudAdopcion WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM SolicitudAdopcion WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}