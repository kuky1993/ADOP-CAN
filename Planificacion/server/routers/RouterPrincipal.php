<?php
include_once('../routers/RouterBase.php');
include_once('../routers/RouterFuncionalidadesEspecificas.php');
function cargarRouters() {
   define("routersPath", "../routers/");
   $files = glob(routersPath."CRUD/*.php");
   foreach ($files as $filename) {
      include_once($filename);
   }
}
cargarRouters();

class RouterPrincipal extends RouterBase
{
   function route(){
      switch(strtolower($this->datosURI->controlador)){
         case "animal":
            $routerAnimal = new RouterAnimal();
            return json_encode($routerAnimal->route());
            break;
         case "raza":
            $routerRaza = new RouterRaza();
            return json_encode($routerRaza->route());
            break;
         case "salud":
            $routerSalud = new RouterSalud();
            return json_encode($routerSalud->route());
            break;
         case "solicitudadopcion":
            $routerSolicitudAdopcion = new RouterSolicitudAdopcion();
            return json_encode($routerSolicitudAdopcion->route());
            break;
         case "tamano":
            $routerTamano = new RouterTamano();
            return json_encode($routerTamano->route());
            break;
         case "tipomascota":
            $routerTipoMascota = new RouterTipoMascota();
            return json_encode($routerTipoMascota->route());
            break;
         case "usuario":
            $routerUsuario = new RouterUsuario();
            return json_encode($routerUsuario->route());
            break;
         default:
            $routerEspeficias = new RouterFuncionalidadesEspecificas();
            return $routerEspeficias->route();
            break;
      }
   }
}
