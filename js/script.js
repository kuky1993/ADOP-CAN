
  $( "#guardarDatos" ).submit(function( event ) {
  var parametros = $(this).serialize();
     $.ajax({
        type: "POST",
        url: "agregar.php",
        data: parametros,
         beforeSend: function(objeto){
          $("#datos_ajax_register").html("Mensaje: Cargando...");
          },
        success: function(datos){
        $("#datos_ajax_register").html(datos);

        load(1);
        }
    });
    event.preventDefault();
  });
