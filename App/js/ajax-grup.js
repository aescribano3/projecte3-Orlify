import $ from 'jquery';



$("#create-grup-button").on("click", function (event) {
    $("#toast-success").hide(); // Asegúrate de que el toast esté oculto

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
            $('#loading-modal').show(); // 
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