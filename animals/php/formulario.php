<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from Animal where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="id_animal">Codigo</label>
    <input type="text" class="form-control" value="<?php echo $Animal->id_animal; ?>" name="id_animal" required>
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $Animal->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="peso">Peso</label>
    <input type="text" class="form-control" value="<?php echo $Animal->peso; ?>" name="peso" required>
  </div>
  <div class="form-group">
    <label for="edad">Edad</label>
    <input type="text" class="form-control" value="<?php echo $Animal->edad; ?>" name="edad" >
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" value="<?php echo $Animal->descripcion; ?>" name="descripcion" >
  </div>
<input type="hidden" name="id" value="<?php echo $Animal->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    //alert("Agregado exitosamente!");
    //$("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
