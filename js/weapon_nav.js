$(function() {
  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/weapon_handler.php",
    type: "POST",
    data: "",
  });
$('.content').load('weapon_info.php');
});
$('.sidenav-button').click(function(){
  $('.sidenav li a.active').removeClass('active');
  $(this).addClass("active");

  var cur = $(this).attr("name");

  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/weapon_handler.php",
    type: "POST",
    data: { currentWeapon: cur },
    success: function (data) {
      console.log(cur);
    }
  });
$('.content').load('weapon_info.php');
});
