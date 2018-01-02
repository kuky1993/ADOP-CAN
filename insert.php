<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('sql313.byethost32.com', 'b32_21140711', 'adopcan451320', 'b32_21140711_ADOPCAN');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['cedula'])){
			$errors[] = "nombres vacío";
		} else if (empty($_POST['nombres'])){
			$errors[] = "apellidos vacío";
    } else if (empty($_POST['apellidos'])){
      $errors[] = "apellidos vacío";
		} else if (empty($_POST['direccion'])){
			$errors[] = "direccion vacío";
		} else if (empty($_POST['correo'])){
			$errors[] = "correo vacío";
		} else if (empty($_POST['telefono'])){
			$errors[] = "telefono vacío";
		}   else if (
			!empty($_POST['nombres']) &&
			!empty($_POST['apellidos']) &&
			!empty($_POST['direccion']) &&
			!empty($_POST['correo']) &&
			!empty($_POST['telefono'])

		){

		// escaping, additionally removing everything that could be (html/javascript-) code
    $nombres=mysqli_real_escape_string($con,(strip_tags($_POST["cedula"],ENT_QUOTES)));
		$nombres=mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));
		$apellidos=mysqli_real_escape_string($con,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));

		$sql="INSERT INTO Usuario (cedula, nombres, apellidos, 	direccion, correo, telefono) VALUES ('".$cedula."','".$nombres."','".$apellidos."','".$direccion."', '".$correo."','".$telefono."'	)";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}

		if (isset($errors)){

			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
