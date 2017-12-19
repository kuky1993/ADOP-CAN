<?php
include('conect.php');
$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$apellidos=$_POST['direccion'];
$apellidos=$_POST['correo'];
$apellidos=$_POST['telefono'];

$stmt = $DBcon->prepare("INSERT INTO Usuario(cedula,nombres,apellidos,direccion,correo,telefono) VALUES(:cedula, :nombres,:apellidos,:direccion,:correo,:telefono)");

$stmt->bindparam(':cedula', $cedula);
$stmt->bindparam(':nombres', $nombres);
$stmt->bindparam(':apellidos', $apellidos);
$stmt->bindparam(':direccion', $direccion);
$stmt->bindparam(':correo', $correo);
$stmt->bindparam(':telefono', $telefono);
if($stmt->execute())
{
  $res="Data Inserted Successfully:";
  echo json_encode($res);
}
else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
}



 ?>
