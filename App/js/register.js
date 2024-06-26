import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

var booluser = false;




var password;    
var errorContainer = $("#errorContainerPass");
var errorContainerUser = $("#errorContainerUser");

//oculta els containers de error de contrasenya i usuari
errorContainer.hide();
errorContainerUser.hide();



// es declaren els booelans per veure si compleix els requisits 
    var boollength = false;
    var boollletra = false;
    var boolnumero = false;
    var boolguio = false;


    //es desactiven els botons de registre i de updateuser
    $("#registerbttn").prop("disabled", true);
    $("#updateuserinfo").prop("disabled", true);


//quan es prem una tecla al input de nom de usuari es crida un ajax per comprovar si existeix al servidor
$("#username").on("input", function() {
    var username = $(this).val();

    $.ajax({
        url: "/check-username",
        type: "POST",
        data: {username},
        success: function (result) {

            if(result){
                errorContainerUser.show();

                booluser = false
            }else{
                booluser = true
                errorContainerUser.hide();

            }

        },
        error: function (error) {
            $("#toast-error").show();
        },
        complete: function () {
            // Acciones después de que la solicitud se complete (ocultar spinner, etc.)
            $("#loading-modal").hide();
        }
    })
   
});



//quan es prem la tecla de contrasenya



//totes les condicions fan el mateix si es compleix el regex mostra el missatge o no i activa o  desactiva el boolea
    $("#password").on("input", function() {
        password = $(this).val();
        var length = $("#length");
        var lletra = $("#lletra");
        var numero = $("#numero");
        var guio = $("#guio");

        var regex = /^.{6,13}$/;
        //longitud
        if ((regex.test(password))) {
            length.html("<svg class='w-3.5 h-3.5 me-2 text-green-400 dark:text-green-500' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5.917 5.724 10.5 15 1.5'/></svg>Conte entre 8 i 12 caracters.");
            boollength = true;
        } else{
            length.html("<svg class='w-3 h-3 me-2.5 text-gray-300 dark:text-gray-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/></svg> Conte entre 8 i 12 caracters.");
            boollength = false;
       
        }

         //conte un numero
         var regex = /^(?=.*\d).*$/;

        if ((regex.test(password))) {
            numero.html("<svg class='w-3.5 h-3.5 me-2 text-green-400 dark:text-green-500' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5.917 5.724 10.5 15 1.5'/></svg> Conte al menys un numero ");
            boolnumero = true;

        } else{
            numero.html("<svg class='w-3 h-3 me-2.5 text-gray-300 dark:text-gray-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/></svg> Conte al menys un numero");
            boolnumero = false;

        }

        //conte una lletra

        var regex = /^(?=.*[a-zA-Z]).*$/;

        if ((regex.test(password))) {
            lletra.html("<svg class='w-3.5 h-3.5 me-2 text-green-400 dark:text-green-500' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5.917 5.724 10.5 15 1.5'/></svg> Conte al menys una lletra");
            boollletra = true;
        } else{
            lletra.html("<svg class='w-3 h-3 me-2.5 text-gray-300 dark:text-gray-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/></svg> Conte al menys una lletra");
            boollletra = false;
        }

        //conte un guio
        var regex = /^(?=.*-).*$/;

        if ((regex.test(password))) {
            guio.html("<svg class='w-3.5 h-3.5 me-2 text-green-400 dark:text-green-500' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5.917 5.724 10.5 15 1.5'/></svg> Conte al menys un guio");
             boolguio = true;

        } else{
            guio.html("<svg class='w-3 h-3 me-2.5 text-gray-300 dark:text-gray-400' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'><path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/></svg> Conte al menys un guio");
            boolguio = false;

        }
    
    });


    //quan es comenca a repetir al contrasenya compara si es la mateixa que la primera que has ficat si ho fas bé 

    $("#confirm-password").on("input", function() {
        var confirmPassword = $(this).val();

        if (password==confirmPassword) {
            errorContainer.hide();
            $("#updateuserinfo").prop("disabled", false);

            if(boollength && boolnumero && boollletra && boolguio && booluser){
                $("#registerbttn").prop("disabled", false);
            }
        } else {
            errorContainer.show();
        }
        if(boollength && boolnumero && boollletra && boolguio){
            $("#registerbttn").prop("disabled", false);
        }
        else{
            $("#registerbttn").prop("disabled", true);
        }
    });
