<?php

if(!empty($_POST)){
	if(isset($_POST["id_animal"]) &&isset($_POST["nombre"]) &&isset($_POST["peso"]) &&isset($_POST["edad"]) &&isset($_POST["descripcion"])){
		if($_POST["id_animal"]!=""&& $_POST["nombre"]!=""&&$_POST["peso"]!=""&&$_POST["edad"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";

			$sql = "insert into Animal(id_animal,nombre,peso,edad,descripcion) value (\"$_POST[id_animal]\",\"$_POST[nombre]\",\"$_POST[peso]\",\"$_POST[edad]\",\"$_POST[descripcion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
