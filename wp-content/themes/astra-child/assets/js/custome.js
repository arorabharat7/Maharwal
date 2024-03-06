

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
  // function openModal() {
  //   document.getElementById("myModal").style.display = "block";
  //   document.body.style.overflowY = "hidden"; 
  //   document.body.style.height = "100%";
  // }

  // // Close the Modal
  // function closeModal() {
  //   document.getElementById("myModal").style.display = "none";
  //   document.body.style.overflowY = "auto";
  //  document.body.style.height = "auto"; 
  // }

  // var slideIndex = 1;
  // showSlides(slideIndex);

  // // Next/previous controls
  // function plusSlides(n) {
  //   showSlides(slideIndex += n);
  // }

  // // Thumbnail image controls
  // function currentSlide(n) {
  //   showSlides(slideIndex = n);
  // }

  // function showSlides(n) {
  //   var i;
  //   var slides = document.getElementsByClassName("mySlides");
  //   var dots = document.getElementsByClassName("demo");
  //   var captionText = document.getElementById("caption");
  //   if (n > slides.length) { slideIndex = 1 }
  //   if (n < 1) { slideIndex = slides.length }
  //   for (i = 0; i < slides.length; i++) {
  //     slides[i].style.display = "none";
  //   }
  //   for (i = 0; i < dots.length; i++) {
  //     dots[i].className = dots[i].className.replace(" active", "");
  //   }
  //   slides[slideIndex - 1].style.display = "block";
  //   dots[slideIndex - 1]+= " active";
   
  // }



 jQuery(document).ready(function () {

   jQuery().fancybox({

    });

   jQuery('[data-fancybox="images"]').fancybox({

      smallBtn: "true",
      beforeClose: function (instance, slide) {
        console.log(slide)

      }
    });
  });
  

  jQuery(document).ready(function () {


 
  

    var btns = jQuery('.photo-gallery .category_btn .btn').click(function() {
      console.log("Asdasd")
      if (this.id == 'all-photos') {
        jQuery('#parent > div').fadeIn(450);
      } else {
        var el = jQuery('.' + this.id).fadeIn(450);
        jQuery('#parent > div').not(el).hide();
      }
      btns.removeClass('focus');
      jQuery(this).addClass('focus');
    }) 
    var firstBtn = jQuery('.photo-gallery .category_btn .btn:first-child');
    firstBtn.addClass('focus');
  
  });
 













jQuery(document).ready(function() {
  // Function to update prices based on selected price range
  function updatePrices(newPriceRange) {
    // Get the new price range value
    var priceRange = newPriceRange || jQuery('#price-range').val();

    // Log the updated price range value
    //console.log(priceRange);

    // Iterate through each checkbox
    jQuery('input[name="items[]"]').each(function() {
        // Check if the item is checked
        // if (jQuery(this).is(':checked')) {
            // Get the original value and price of the item
            var originalValue = parseFloat(jQuery(this).val());
            var originalPrice = parseFloat(jQuery(this).data('price'));

            // Calculate the new price based on the selected range
            var newPrice = originalPrice * parseFloat(priceRange);

            // Update the displayed price of the item
            var itemId = jQuery(this).attr('id');
            jQuery('#' + itemId + '-price').text(jQuery(this).val() + ' - jQuery' + newPrice.toFixed(2));

            // Update the value of the checkbox
            jQuery(this).val(newPrice.toFixed(2));
            jQuery('.' + itemId).text('₹' + newPrice.toFixed(2));
           // jQuery(this).next('label').text(' ' + jQuery(this).val() + ' - $' + newPrice.toFixed(2));
        // }
    });
}

  
  updatePrices();

  
  jQuery('#price-range').change(function() {
  
    var newPriceRange = jQuery(this).val();
    updatePrices(newPriceRange);
});

  
  jQuery('input[name="items[]"]').change(function() {
   
    if (jQuery(this).is(':checked')) {
        updatePrices();
    }
});

  // Submit form
  jQuery('#custom-form').submit(function(event) {
    //event.preventDefault();
      // Get selected items and their prices
      var selectedItems = [];
      jQuery('input[name="items[]"]:checked').each(function() {
        var itemName = jQuery(this).next('label').text().trim();
          var itemPrice = parseFloat(jQuery(this).val());
          var itemId = jQuery(this).attr('id');
          var category = jQuery(this).data('category');
          selectedItems.push({id: itemId, category: category, name: itemName, price: itemPrice });
      });

      // Set the value of the hidden input field
      jQuery('#selected-items').val(JSON.stringify(selectedItems));
  });
});






