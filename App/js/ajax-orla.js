import $ from "jquery";
var selectedOrlaId = 0;

$("#create-orla-button").click(function () {

  $("#toast-success").hide(); 
  $("#toast-error").hide();

  var orlaname = $("#orlaname").val();
  console.log("nombre orla " + orlaname);
  var orlagrup = $("#orlagrup").val();
  console.log("grupo orla " + orlagrup);
  var orlaplantilla = $("#orlaplantilla").val();
  console.log("plantilla orla " + orlaplantilla);

  $.ajax({
    url: "/createorla",
    method: "POST",
    data: {
      "orlaname": orlaname,
      "orlagrup": orlagrup,
      "orlaplantilla": orlaplantilla,
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
  $("#orlaamodificar").attr("placeholder", `Modificar orla Nº ${selectedOrlaId}`);

});

$("#btn-modify-orla").on("click", function (event) {
  $

  
      $("#toast-success").hide();
      $("#toast-error").hide();
  
      var orlaname = $("#orlaname-M").val();
      console.log("nombre orla " + orlaname);
      var orlagrup = $("#orlagrup-M").val();
      console.log("grupo orla " + orlagrup);
      var orlaplantilla = $("#orlaplantilla-M").val();
      console.log("plantilla orla " + orlaplantilla);
  
      $.ajax({
          
          url: "/modifiorla",
          method: "POST",
          data: {
            "orlaId": selectedOrlaId,
            "orlaname": orlaname,
            "orlagrup": orlagrup,
            "orlaplantilla": orlaplantilla,
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
