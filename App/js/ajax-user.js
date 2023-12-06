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

    $("#cancelbttnuser").click();

    $.ajax({
        
        url: "/create-user",
        type: "POST",
        data: {username: username, name: name, lastname: lastname, email: email, password: password, userrol: userrol},
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

$('.bttn-M-U').on('click', function () {
    

    selectedUserId = $(this).closest(".GetIdUser").attr('id');

    

    $.ajax({
            
        url: "/getuser",
        type: "POST",
        data: {selectedUserId},
        beforeSend: function () {
            $('#loading-modal').show();
        },
        success: function (result) {
            console.log(result["user"]);

            $("#username-M").val(result["user"]["username"]);
            $("#name-M").val(result["user"]["name"]);
            $("#lastname-M").val(result["user"]["lastname"]);
            $("#email-M").val(result["user"]["email"]);
            $("#userrol-M").val(result["user"]["rol"]);
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

    
        $("#cancelbttnuser").click();
    
        $.ajax({
            
            url: "/modifi-user",
            type: "POST",
            data: {id: selectedUserId, username: username, name: name, lastname: lastname, email: email, userrol: userrol, grups: grups},
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

$(".drop-button-user").on("click", function (event) {

    selectedUserId = $(this).closest(".GetIdUser").attr('id');

    $("#toast-success").hide();
    $("#toast-error").hide();

    $.ajax({
        
        url: "/drop-user",
        type: "POST",
        data: {id: selectedUserId},
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
