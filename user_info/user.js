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




  const imageInput = document.querySelector('.bMWDYw');
  const avatarImage = document.querySelector('.LoNm4g');
  const chooseButton = document.querySelector('.btn--inline');
  
  chooseButton.addEventListener('click', () => {
    imageInput.click();
  });
  
  imageInput.addEventListener('change', handleImageUpload);
  
  function handleImageUpload(event) {
    const file = event.target.files[0];
  
    if (file) {
      const imageUrl = URL.createObjectURL(file);
      avatarImage.style.backgroundImage = `url("${imageUrl}")`;
  
      // In a real scenario, you would send the file to a server for actual upload.
      // Here, we're just updating the background image of the avatar display.
    }
  }
  