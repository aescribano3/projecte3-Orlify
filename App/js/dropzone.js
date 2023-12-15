import Dropzone from 'dropzone';

document.addEventListener('DOMContentLoaded', function () {
  let miDropzone;

  miDropzone = new Dropzone("#miFormulario", {
    url: document.getElementById('miFormulario').getAttribute('action'),
    paramName: "imagen[]",
    acceptedFiles: 'image/*',
    autoProcessQueue: false,
    init: function () {
      this.on("addedfile", function (file) {
        file.previewElement.style.display = "none";
      });

      // Agregamos un listener al botón para que llame a la función al hacer clic
      document.getElementById('enviarFormularioButton').addEventListener('click', function () {
        // Llamamos a la función personalizada al hacer clic en el botón
        
        enviarFormulario();

      });

      this.on("success", function (file, response) {
        location.reload(true);
      });
    },
  });

  function enviarFormulario() {

    miDropzone.processQueue();
  }
});
