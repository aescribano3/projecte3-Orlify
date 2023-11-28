import $ from 'jquery';

$("#create-grup-button").on("click", function (event) {
    var grupname = $("#grupname-C").val();
    var grupcurs = $("#grupcurs-C").val();
    var grupteacher = $("#grupteacher-C").val();
    $.ajax({
        url: "/create-grup",
        type: "POST",
        data: {grupname: grupname, grupcurs: grupcurs, grupteacher: grupteacher},
        success: function (result) {
            $("#create-grup").addClass("hidden");
            $("#toast-success").removeClass("hidden");
        },
        error: function (error) {
            $("#create-grup").addClass("hidden");
            $("#toast-error").removeClass("hidden");
        }
    });
});