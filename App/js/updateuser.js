import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

$("#updateuserinfo").on("click", function() {
    updateUserInfo();
});
var errorContainerX = $("#errorContainerX");

errorContainerX.hide();

function updateUserInfo() {
    // Obtén los datos del formulario
    var formElement = $('#infouserupdate')[0];
    var formData = new FormData(formElement);
  
    // Agrega la imagen capturada al formData
    var capturedImageData = $('#capturedImageData').val();
    formData.append('capturedImageData', capturedImageData);

    // Realiza la solicitud AJAX para verificar la contraseña y actualizar la información
    $.ajax({
        type: "POST",
        url: "/checkpass",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.result === "ok") {
                $.ajax({
                    type: "POST",
                    url: "/updatedatauser",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        //window.location.href = "/mis-datos";
                    }
                });
                errorContainerX.hide();
            } else {
                errorContainerX.show();
            }
        }
    });
}


