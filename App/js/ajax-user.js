import $ from 'jquery';

var selectedUserId = 0;




$("#create-user-button").on("click", function (event) {
    $("#toast-success").hide();
    $("#toast-error").hide();

    var username = $("#username-C").val();
    var name = $("#name-C").val();
    var lastname = $("#lastname-C").val();
    var email = $("#email-C").val();
    var password = $("#password-C").val();
    var userrol = $("#userrol-C").val();

    $.ajax({
        
        url: "/create-user",
        method: "POST",
        data: {
            "username": username,
            "name": name,
            "lastname": lastname,
            "email": email,
            "password": password,
            "userrol": userrol,
        },
        beforeSend: function () {
            $('#loading-modal').show();
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
            $("#loading-modal").hide();
        }
    });
}); 

$('.bttn-M-U').on('click', function () {

    selectedUserId = $(this).closest(".GetIdUser").attr('id');

    $("#username-M").val($(this).closest(".GetIdUser").attr('username'));

    $.ajax({
            
        url: "/getuser",
        type: "POST",
        data: {id:selectedUserId},
        beforeSend: function () {
            $('#loading-modal').show();
        },
        success: function (result) {

            $("#username-M").val(result["data"]["username"]);
            $("#name-M").val(result["data"]["name"]);
            $("#lastname-M").val(result["data"]["lastname"]);
            $("#email-M").val(result["data"]["email"]);
            $("#userrol-M").val(result["data"]["rol"]);
            
        },
        error: function (error) {
            $("#toast-error").show();
        },
        complete: function () {
            $("#loading-modal").hide();
        }
    });

});

$("#modifi-user-button").on("click", function (event) {



    
        $("#toast-success").hide();
        $("#toast-error").hide();
    
        var username = $("#username-M").val();
        var name = $("#name-M").val();
        var lastname = $("#lastname-M").val();
        var email = $("#email-M").val();
        var userrol = $("#userrol-M").val();
        var grups = [];




        $('#dropdown input[type="checkbox"]:checked').each(function() {
            grups.push($(this).val());
        });

    
    
        $.ajax({
            
            url: "/modifi-user",
            method: "POST",
            data: {
                "id": selectedUserId,
                "username": username,
                "name": name,
                "lastname": lastname,
                "email": email,
                "userrol": userrol,
                "grups": grups
            },
            beforeSend: function () {
                $('#loading-modal').show();
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
                $("#loading-modal").hide();
            }
        });
    });

$(".drop-button-user").on("click", function (event) {

    selectedUserId = $(this).closest(".GetIdUser").attr('id');

    $("#toast-success").hide();
    $("#toast-error").hide();

    $.ajax({
        
        url: "/drop-user",
        method: "POST",
        data: {
            "id": selectedUserId
        },
        beforeSend: function () {
            $('#loading-modal').show();
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
            $("#loading-modal").hide();
        }
    });
});

// csv
    $(".subircsv").on("submit", function (event) {
        event.preventDefault();

        $("#toast-success").hide();
        $("#toast-error").hide();

        // Crear un objeto FormData y agregar el archivo
        var formData = new FormData($(this)[0]);
        formData.append("variableControl", "csv");

        $.ajax({
            url: "/csvfile",
            method: "POST",
            data: formData,
            processData: false,  
            contentType: false,  
            beforeSend: function () {
                $('#loading-modal').show();
            },
            success: function (result) {
                console.log("hola");
                let token = result.token;
                if (token) {
                    $("#respuestaajax").html(result.resspuestaajax);
                    $("#toast-error").hide();
                    $("#toast-success").show();
                }
            },
            error: function (error) {
                console.log(error);
                let errorServidor = error.statusText;
                $("#toast-success").hide();
                $("#toast-error").show();
                $("#errortoast").html(errorServidor);
            },
            complete: function () {
                $("#loading-modal").hide();
            }
        });
    });
