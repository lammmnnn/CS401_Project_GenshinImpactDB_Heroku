$(function() {
  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/material_handler.php",
    type: "POST",
    data: "",
  });
$('.content').load('material_info.php');
});
$('.sidenav-button').click(function(){
  $('.sidenav li a.active').removeClass('active');
  $(this).addClass("active");

  var cur = $(this).attr("name");

  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/material_handler.php",
    type: "POST",
    data: { currentMaterial: cur },
    success: function (data) {
      console.log(cur);
    }
  });
$('.content').load('material_info.php');
});
