<?php
include_once('../routers/RouterBase.php');
include_once('../controladores/CRUD/ControladorAnimal.php');
class RouterAnimal extends RouterBase
{
   public $controlador;

   function __construct(){
      parent::__construct();
      $this->controlador = new ControladorAnimal();
   }
   function route()
   {
      switch (strtolower($this->datosURI->accion)){
         case "borrar":
            return $this->controlador->borrar($this->datosURI->argumentos["id"]);
            break;
         case "leer":
            return $this->controlador->leer($this->datosURI->argumentos["id"]);
            break;
         case "leer_paginado":
            return $this->controlador->leer_paginado($this->datosURI->argumentos["pagina"],$this->datosURI->argumentos["registros_por_pagina"]);
            break;
         case "numero_paginas":
            return $this->controlador->numero_paginas($this->datosURI->argumentos["registros_por_pagina"]);
            break;
         case "leer_filtrado":
            return $this->controlador->leer_filtrado($this->datosURI->argumentos["columna"],$this->datosURI->argumentos["tipo_filtro"],$this->datosURI->argumentos["filtro"]);
            break;
         case "crear":
            return $this->controlador->crear(new Animal($this->datosURI->mensaje_body["idAnimal"],$this->datosURI->mensaje_body["idTipoMascota"],$this->datosURI->mensaje_body["idSalud"],$this->datosURI->mensaje_body["idTamano"],$this->datosURI->mensaje_body["nombre"],$this->datosURI->mensaje_body["peso"],$this->datosURI->mensaje_body["edad"],$this->datosURI->mensaje_body["descripcion"],$this->datosURI->mensaje_body["imagen"]));
            break;
         case "actualizar":
            return $this->controlador->actualizar(new Animal($this->datosURI->mensaje_body["idAnimal"],$this->datosURI->mensaje_body["idTipoMascota"],$this->datosURI->mensaje_body["idSalud"],$this->datosURI->mensaje_body["idTamano"],$this->datosURI->mensaje_body["nombre"],$this->datosURI->mensaje_body["peso"],$this->datosURI->mensaje_body["edad"],$this->datosURI->mensaje_body["descripcion"],$this->datosURI->mensaje_body["imagen"]));
            break;
      }
   }
}