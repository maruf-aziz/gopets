<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GoPets Animal services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="grid_product.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

<?php
    include 'header.php';
?>

<?php
    if (!isset($_GET['halaman'])) {
        include 'main.php';
    }
    else if ($_GET['halaman']=="about") {
        include 'about.php';
    }
    else if ($_GET['halaman']=="contact") {
            include 'contact.php';
    }
    else if ($_GET['halaman']=="konsultasi") {
        include 'detail/konsultasi.php';
    }
    else if ($_GET['halaman']=="petvet") {
        include 'detail/detailklinik.php';
    }
    else if ($_GET['halaman']=="grooming") {
        include 'detail/detailgrooming.php';
    }
    else if ($_GET['halaman']=="petshop") {
        include 'detail/detailpetshop.php';
    }



    
    else if ($_GET['halaman']=="services") {
        include 'services.php';
    }
    else if ($_GET['halaman']=="listpetshop") {
        include 'service/liststore.php';
    }
    else if ($_GET['halaman']=="listklinik") {
        include 'service/petvet.php';
    }
    else if ($_GET['halaman']=="listgrooming") {
        include 'service/petgrooming.php';
    }
    else if ($_GET['halaman']=="listpetspa") {
        include 'service/petspa.php';
    }
    else if ($_GET['halaman']=="login") {
        echo "<script>location='login/index.php';</script>";
    }
    else if ($_GET['halaman']=="boarding") {
        include 'menu/petboarding.php';
    }
        else if ($_GET['halaman']=="HealtyMeals") {
        include 'menu/healtymeals.php';
    }
        else if ($_GET['halaman']=="spa") {
        include 'menu/petspa.php';
    }
        else if ($_GET['halaman']=="grooming") {
        include 'menu/petgrooming.php';
    }
    else if ($_GET['halaman']=="petvet") {
        include 'menu/petvet.php';
    }
    else if ($_GET['halaman']=="petshop") {
        include 'menu/petshop.php';
    }
    else if ($_GET['halaman']=="transaksi") {
        include 'transaksi/transaksi_petshop.php';
    }
    
    else
    {
        include 'main.php';
    }
?>

    <!-- footer_start  -->
<?php
    include 'footer.php';
?>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-2.1.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
      <script>
// Render .item-template inside .render
var itemContent = $('.item-render').html();
var itemRenderer = $('.render');
// Set the amount of items displayed with "itemCount" ex. 16 items
var itemCount = 16;
for(var i = 1; i <= itemCount; i++) {
  itemRenderer.append(itemContent);
}


// Sidebar Icon Toggle
// $('.sidebar a').click(function(e){
//   e.preventDefault();
//   $(this).toggleClass('checked');
// });

$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}

</script>
<script>
											(function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);
										</script>
</body>

</html>