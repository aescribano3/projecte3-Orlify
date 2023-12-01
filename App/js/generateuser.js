import jQuery from "jquery";
window.$ = window.jQuery = jQuery;


$("#generate-user-button").on("click", function() {
    generaterandomuser();
});


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