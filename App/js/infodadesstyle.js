function resetStyle() {
  $(".aclicado").css({
    backgroundColor: "white",
    color: "black",
  });
}

$("#UsersLink").click(function () {
  resetStyle(); 
  $(this).css({
    backgroundColor: "rgb(220, 38, 38)",
    color: "rgb(255, 255, 255)",
  });
});

$("#GrupsLink").click(function () {
  resetStyle(); 
  $(this).css({
    backgroundColor: "rgb(220, 38, 38)",
    color: "rgb(255, 255, 255)",
  });
});

$("#OrlesLink").click(function () {
  resetStyle(); 
  $(this).css({
    backgroundColor: "rgb(220, 38, 38)",
    color: "rgb(255, 255, 255)",
  });
});
