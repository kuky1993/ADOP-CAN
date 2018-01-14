<?php

if(!empty($_POST)){
	if(isset(($_POST["nombre"]) &&isset($_POST["peso"]) &&isset($_POST["edad"]) &&isset($_POST["descripcion"])){
		if( $_POST["nombre"]!=""&&$_POST["peso"]!=""&&$_POST["edad"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";

<<<<<<< HEAD
			$sql = "insert into Animal(id_animal,nombre,peso,edad,descripcion) value (\"$_POST[id_animal]\",\"$_POST[nombre]\",\"$_POST[peso]\",\"$_POST[edad]\",\"$_POST[descripcion]\")";
=======
			$sql = "insert into Animal(nombre,peso,edad,descripcion,created_at) value (\"$_POST[nombre]\",\"$_POST[peso]\",\"$_POST[edad]\",\"$_POST[descripcion]\",NOW())";
>>>>>>> 65963530998f0652c46fdc81ace3d384627b67ad
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
