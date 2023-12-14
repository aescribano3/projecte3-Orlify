import Dropzone from 'dropzone';


document.addEventListener('DOMContentLoaded', function () {
    let miDropzone;

    miDropzone = new Dropzone("#miFormulario", {
      url: document.getElementById('miFormulario').getAttribute('action'), //conte la ruta a la que s'enviara el formulari 
      paramName: "imagen[]",  //es fica el mateix nom de parametre per que arribi bé al php
      acceptedFiles: 'image/*',
      autoProcessQueue: false, //aixo evita que la imatge es puji quan es solta al servidor 
      init: function () {
        this.on("addedfile", function (file) {
          // Oculta la vista previa
          file.previewElement.style.display = "none"; //amaga el estil de mostrar la imatge
        });

        // event per escoltar la opcio de clickar el boto de formulari
        document.getElementById('enviarFormularioButton').addEventListener('click', function () {
          miDropzone.processQueue();

        });
          //quan el servidor retorna la resposta recarrega la pagina
        this.on("success", function (file, response) {
            location.reload(true);
          
        });
      },
    });
  });  
