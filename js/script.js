
function insertData() {
var cedula=$("#cedula").val();
var nombres=$("#nombres").val();
var apellidos=$("#apellidos").val();
var direccion=$("#direccion").val();
var correo=$("#correo").val();
var telefono=$("#telefono").val();

    $.ajax({
        type: "POST",
        url: "insert.php",
        data: {cedula:cedula,nombres:nombres,apellidos:apellidos,direccion:direccion,correo:correo,telefono:telefono},
        dataType: "JSON",
        success: function(data) {
         $("#message").html(data);
        $("p").addClass("alert alert-success");
        },
        error: function(err) {
        alert(err);
        }
    });

}
