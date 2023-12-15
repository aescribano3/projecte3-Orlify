import $ from "jquery";
var selectedOrlaId = 0;

$("#create-orla-button").click(function () {

  $("#toast-success").hide(); 
  $("#toast-error").hide();

  var orlaname = $("#orlaname").val();
  var orlagrup = $("#orlagrup").val();
  var orlaplantilla = $("#orlaplantilla").val();
  var orlakey = $("#orlakey").val();
  var orlapublic = $("#orlapublic").val();

  $.ajax({
    url: "/createorla",
    method: "POST",
    data: {
      "orlaname": orlaname,
      "orlagrup": orlagrup,
      "orlaplantilla": orlaplantilla,
      "orlakey": orlakey,
      "orlapublic": orlapublic,
    },
    beforeSend: function () {
      $("#loading-modal").show();
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
    },
  });
});

// modifi orla
$('.bttn-M-O').on('click', function () {

  selectedOrlaId = $(this).closest(".GetIdOrla").attr('id');

});

$("#btn-modify-orla").on("click", function (event) {
  
      $("#toast-success").hide();
      $("#toast-error").hide();
  
      var orlaname = $("#orlaname-M").val();
      var orlagrup = $("#orlagrup-M").val();
      var orlaplantilla = $("#orlaplantilla-M").val();
      var orlakey = $("#orlakey-M").val();
      var orlapublic = $("#orlapublic-M").val();
  
      $.ajax({
          
          url: "/modifiorla",
          method: "POST",
          data: {
            "orlaId": selectedOrlaId,
            "orlaname": orlaname,
            "orlagrup": orlagrup,
            "orlaplantilla": orlaplantilla,
            "orlakey": orlakey,
            "orlapublic": orlapublic,
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

// delete orla
$(".drop-button-orla").on("click", function (event) {

  selectedOrlaId = $(this).closest(".GetIdOrla").attr('id');

  $("#toast-success").hide();
  $("#toast-error").hide();

  $.ajax({
      
      url: "/droporla",
      method: "POST",
      data: {
          "orlaId": selectedOrlaId
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
