$(function() {
  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/character_handler.php",
    type: "POST",
    data: "",
  });
$('.content').load('char_info.php');
});
$('.sidenav-button').click(function(){
  $('.sidenav li a.active').removeClass('active');
  $(this).addClass("active");

  var cur = $(this).attr("name");

  // fire off the request to /redirect.php
  request = $.ajax({
    url: "/handler/character_handler.php",
    type: "POST",
    data: { currentChar: cur }
  });
$('.content').load('char_info.php');
});
