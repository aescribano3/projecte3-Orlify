import $ from 'jquery';

var selectedGroupId = 0;

$("#create-grup-button").on("click", function (event) {
    $("#toast-success").hide(); // Asegúrate de que el toast esté oculto
    $("#toast-error").hide();

    var grupname = $("#grupname-C").val();
    var grupcurs = $("#grupcurs-C").val();
    var grupteacher = $("#grupteacher-C").val();
    $("#cancelbttn").click();

    $.ajax({
        
        url: "/create-grup",
        type: "POST",
        data: {grupname: grupname, grupcurs: grupcurs, grupteacher: grupteacher},
        beforeSend: function () {
            // Acciones antes de enviar la solicitud (mostrar spinner, etc.)
            $('#loading-modal').show();
        },
        success: function (result) {
            $("#toast-success").show();
        },
        error: function (error) {
            $("#toast-error").show();
        },
        complete: function () {
            // Acciones después de que la solicitud se complete (ocultar spinner, etc.)
            $("#loading-modal").hide();
        }
    });
}); 

$('[data-modal-target="modifi-grup"]').on('click', function () {

    selectedGroupId = $(this).attr('id');

});

$("#modifi-grup-button").on("click", function (event) {

    $("#toast-success").hide();
    $("#toast-error").hide();

    var grupname = $("#grupname-M").val();
    var grupcurs = $("#grupcurs-M").val();
    var grupteacher = $("#grupteacher-M").val();

    $("#cancelbttn").click();

    $.ajax({
        
        url: "/modifi-grup",
        type: "POST",
        data: {id: selectedGroupId, grupname: grupname, grupcurs: grupcurs, grupteacher: grupteacher},
        beforeSend: function () {
            $('#loading-modal').show();
        },
        success: function (result) {
            $("#toast-success").show();
        },
        error: function (error) {
            $("#toast-error").show();
        },
        complete: function () {
            $("#loading-modal").hide();
        }
    });
});

$(".drop-button").on("click", function (event) {

    selectedGroupId = $(this).attr('id');

    $("#toast-success").hide();
    $("#toast-error").hide();

    $.ajax({
        
        url: "/drop-grup",
        type: "POST",
        data: {id: selectedGroupId},
        beforeSend: function () {
            $('#loading-modal').show();
        },
        success: function (result) {
            
            $("#toast-success").show();
        },
        error: function (error) {
            $("#toast-error").show();
        },
        complete: function () {
            $("#loading-modal").hide();
        }
    });
});