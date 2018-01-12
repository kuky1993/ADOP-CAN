<?php

if(!empty($_POST)){
	if(isset(($_POST["nombre"]) &&isset($_POST["peso"]) &&isset($_POST["edad"]) &&isset($_POST["descripcion"])){
		if( $_POST["nombre"]!=""&&$_POST["peso"]!=""&&$_POST["edad"]!=""&&$_POST["descripcion"]!=""){
			include "conexion.php";

			$sql = "insert into Animal(nombre,peso,edad,descripcion,created_at) value (\"$_POST[nombre]\",\"$_POST[peso]\",\"$_POST[edad]\",\"$_POST[descripcion]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
