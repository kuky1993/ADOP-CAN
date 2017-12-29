<?php
include('conect.php');
$cedula=$_POST["cedula"];
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$apellidos=$_POST["direccion"];
$apellidos=$_POST["correo"];
$apellidos=$_POST["telefono"];

$insertar="INSERT INTO Usuario(cedula,nombres,apellidos,direccion,correo,telefono) VALUES('$cedula','$nombres','$apellidos','$direccion','$correo','$telefono')";
//ejecute el insert
$resultado=mysqli_query($conexion,$insertar)
if(!$resultado){
echo "error al ingresar datos";
}
else {
echo "datos ingresados exitosamente";
}
//cerrar coneccion
mysqli_close($conexion)


 ?>
