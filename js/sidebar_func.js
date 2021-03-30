$(function() {
  $(".sidenav-button").load(function() {
    if ($(this).attr("id") == "<?php echo $currentChar; ?>") {
      $(this).addClass("active");
    }
  });
});
