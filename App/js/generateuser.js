import jQuery from "jquery";
window.$ = window.jQuery = jQuery;



//quan es prem el boto crida a la funcio de generar random user
$("#generate-user-button").on("click", function() {
    generaterandomuser();
});


//la funcio es molt simple obte els valors de l'ajax i els fica al formulari per mostrar les dades generades
function generaterandomuser() {
$.ajax({
    url: 'https://randomuser.me/api/',
    dataType: 'json',
    success: function(data) {
      $('#name-C').val(data["results"]["0"]["name"]["first"]);
      $('#lastname-C').val(data["results"]["0"]["name"]["last"]);
      $('#username-C').val(data["results"]["0"]["login"]["username"]);
      $('#email-C').val(data["results"]["0"]["email"]);
      $('#password-C').val("testing-10");
   }
  });

}