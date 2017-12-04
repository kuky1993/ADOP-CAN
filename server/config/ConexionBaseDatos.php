<?php
include_once("../persistencia/DatosConexion.php");
class ConexionBaseDatos {
    private static $array = array();
    public static function DatosConexiones(){
        $array = array();
        $array[] = new DatosConexion("pruebasITSY","172.16.0.9","adopcan.byethost32.com ","b32_21140711","adopcan951320");
        $array[] = new DatosConexion("local","adopcan.byethost32.com","b32_21140711","prueba","adopcan951320");
        return $array;
    }
}
