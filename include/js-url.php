<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {

    utilsScript: "build/js/utils.js",
  });
</script>
<script>
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    draggable: true,
    touchThreshold: 5,
    slidesToShow: 1,
    fade: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  jQuery('body').bind('click', function(e) {
    if (jQuery(e.target).closest('.navbar-expand-md').length == 0) {
      var opened = jQuery('.navbar-collapse').hasClass('collapse show');
      if (opened === true) {
        jQuery('.navbar-collapse').collapse('hide');
      }
    }
  });

  $('.testiomonial_slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 2000,

    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.clients_logos').slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 1800,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $(document).ready(function() {

    $('.counter').each(function() {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });

  });
</script>

<!-- Contact form start -->
<script>
  function submitForm(formId) {
    debugger
    try {

      if (!$("#" + formId).valid()) {
        return false
      }
      $("button").attr('disabled', true)
      var countcode = $(".iti__selected-flag").attr("title");
      var postData = $('#' + formId).serialize() + '&' + 'countCode' + '=' + [countcode]
      $.ajax({
        type: 'POST',
        url: "mail.php",
        data: postData,
        success: function(data) {
          $("button").attr('disabled', false)
          if (data == 1) {
            $(".loader").modal("show");
            $("#" + formId)[0].reset();
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
              x.className = x.className.replace("show", "");
            }, 3000);
            setTimeout(function() {
              $(".loader").modal("hide");
              $("#modals").modal("hide");
            }, 3000);

          } else {
            alert(data)
          }
        },
        error: function(error) {
          $("").attr('disabled', false)
          alert("Something went wrong, please try again later")
        }
      });
    } catch (error) {
      console.log(error.message);

      $("button").attr('disabled', false)
      alert("Something went wrong, please try again later")
    }
  }
</script>
<!-- Contact form end -->