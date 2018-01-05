<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
      $array[] = new DatosConexion("local","sql313.byethost32.com","b32_21140711_AdoptCan","b32_21140711","adopcan451320");
        return $array;
    }
}
