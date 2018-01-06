<?php

if(!empty($_POST)){
		if(isset($_POST["id_animal"]) &&isset($_POST["nombre"]) &&isset($_POST["peso"]) &&isset($_POST["edad"]) &&isset($_POST["descripcion"])){
			if($_POST["id_animal"]!=""&& $_POST["nombre"]!=""&&$_POST["peso"]!=""&&$_POST["edad"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";

			$sql = "update Animal set id_animal=\"$_POST[id_animal]\",nombre=\"$_POST[nombre]\",peso=\"$_POST[peso]\",edad=\"$_POST[edad]\",descripcion=\"$_POST[descripcion]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
