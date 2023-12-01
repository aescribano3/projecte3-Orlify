import $ from "jquery";

$("#create-orla-button").click(function () {

  $("#toast-success").hide(); // Asegúrate de que el toast esté oculto
  $("#toast-error").hide();

  var orlaname = $("#orlaname").val();
  console.log("nombre orla " + orlaname);
  var orlagrup = $("#orlagrup").val();
  console.log("grupo orla " + orlagrup);
  var orlaplantilla = $("#orlaplantilla").val();
  console.log("plantilla orla " + orlaplantilla);

  $.ajax({
    url: "/createorla",
    method: "POST",
    data: {
      "orlaname": orlaname,
      "orlagrup": orlagrup,
      "orlaplantilla": orlaplantilla,
    },
    beforeSend: function () {
      // Acciones antes de enviar la solicitud (mostrar spinner, etc.)
      $("#loading-modal").show();
    },
    success: function (result) {
        let token = result.token;
        if (token) {
          $("#respuestaajax").html(result.resspuestaajax);
            $("#toast-error").hide();
            $("#toast-success").show();
        } 
    },
    error: function (error) {
      let errorServidor = error.statusText;
            $("#toast-success").hide();
            $("#toast-error").show();
            $("#errortoast").html(errorServidor);
    },
    complete: function () {
      // Acciones después de que la solicitud se complete (ocultar spinner, etc.)
      $("#loading-modal").hide();
    },
  });
});