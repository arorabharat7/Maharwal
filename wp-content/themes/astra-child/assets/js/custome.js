

var swiper = new Swiper(".customer-review", {
  slidesPerView: 3,
  spaceBetween: 20,
  autoplay: true,
  infinite: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    360: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },


    1024: {
      slidesPerView: 1,
      spaceBetween: 20,

    },
  },
});




var menu = document.getElementById("menu");
var main = document.getElementById("offcanvas");

// show the menu
function openMenu() {
  menu.classList.remove('-ml-ml-96');
  menu.classList.add('ml-0');
}

// make the menu "go away"
function closeMenu() {
  menu.classList.remove('ml-0');
  menu.classList.add('-ml-ml-96');
}



var swiper = new Swiper(".testimonial-slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    autoplay: true,
    infinite: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },

      360: {
        slidesPerView: 1,
        spaceBetween: 0,
      },

      768: {
        slidesPerView: 3,
        spaceBetween: 100,
      },


      1024: {
        slidesPerView: 3,
        spaceBetween: 200,

      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 400,

      },
    },
  });

  var swiper = new Swiper(".about-lift-slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    autoplay: true,
    infinite: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      360: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
        slidesPerView: 1,
        spaceBetween: 20,
      },


      1024: {
        slidesPerView: 1,
        spaceBetween: 20,

      },
    },
  });


  // Open the Modal
  function openModal() {
    document.getElementById("myModal").style.display = "block";
    document.body.style.overflowY = "hidden"; 
    document.body.style.height = "100%";
  }

  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
    document.body.style.overflowY = "auto";
   document.body.style.height = "auto"; 
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1]+= " active";
   
  }




  


 