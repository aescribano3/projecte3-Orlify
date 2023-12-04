import $ from 'jquery';

var selectedGroupId = 0;

$("#create-grup-button").on("click", function (event) {
    $("#toast-success").hide(); // Asegúrate de que el toast esté oculto
    $("#toast-error").hide();

    var grupname = $("#grupname-C").val();
    var grupcurs = $("#grupcurs-C").val();
    var grupteacher = $("#grupteacher-C").val();

    $.ajax({
        
        url: "/create-grup",
        method: "POST",
        data: {
            "grupname": grupname,
            "grupcurs": grupcurs,
            "grupteacher": grupteacher
        },
        beforeSend: function () {
            // Acciones antes de enviar la solicitud (mostrar spinner, etc.)
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
            // Acciones después de que la solicitud se complete (ocultar spinner, etc.)
            $("#loading-modal").hide();
        }
    });
}); 

$('.bttn-M-G').on('click', function () {

    selectedGroupId = $(this).closest(".GetIdGrup").attr('id');

});

$("#modifi-grup-button").on("click", function (event) {

    $("#toast-success").hide();
    $("#toast-error").hide();

    var grupname = $("#grupname-M").val();
    var grupcurs = $("#grupcurs-M").val();
    var grupteacher = $("#grupteacher-M").val();


    $.ajax({
        url: "/modifi-grup",
        method: "POST",
        data: {
            "id": selectedGroupId,
            "grupname": grupname,
            "grupcurs": grupcurs,
            "grupteacher": grupteacher
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

$(".drop-button-grup").on("click", function (event) {

    selectedGroupId = $(this).closest(".GetIdGrup").attr('id');

    $("#toast-success").hide();
    $("#toast-error").hide();

    $.ajax({
        
        url: "/drop-grup",
        method: "POST",
        data: {
            "id": selectedGroupId
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
