// menu
$(document).ready(function() {
  $(".expanded-dropdown").mouseenter(function() {
    var submenu = $(this).find(".dropdown-menu");
    submenu.slideDown();
  });

  $(".expanded-dropdown").mouseleave(function() {
    var submenu = $(this).find(".dropdown-menu");
    submenu.slideUp();
  });
});
