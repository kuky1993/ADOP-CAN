<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
      $array[] = new DatosConexion("local","ftp.byethost32.com","b32_21140711","b32_21140711_AdoptCan","adopcan951320");
        return $array;
    }
}
