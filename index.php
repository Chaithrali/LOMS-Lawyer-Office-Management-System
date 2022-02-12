
<?php
define ('DIR','');
require_once DIR .'config.php';
$admin=new Admin();
//$control=new Controller();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LOMS-Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="Front/css/bootstrap.min.css">
    <link rel="stylesheet" href="Front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Front/css/magnific-popup.css">
    <link rel="stylesheet" href="Front/css/font-awesome.min.css">
    <link rel="stylesheet" href="Front/css/themify-icons.css">
    <link rel="stylesheet" href="Front/css/nice-select.css">
    <link rel="stylesheet" href="Front/css/flaticon.css">
    <link rel="stylesheet" href="Front/css/gijgo.css">
    <link rel="stylesheet" href="Front/css/animate.css">
    <link rel="stylesheet" href="Front/css/slick.css">
    <link rel="stylesheet" href="Front/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="Front/css/style.css">

    <style type="text/css">

    .slider_area
    {
        ackground-image: url('Front/img/2.png');
    }
    </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
       <!-- header-end -->
<?php include "header.php";?>

  <div class="slider_area"style="background-image: url('Front/img/try2.png')">

         <div class="single_slider  d-flex align-items-center slider_bg_1"style="background-image: url('Front/img/try2.png');">
                  <h1 style="color:white;margin-left:400px;font-size:80px">LOMS-LAWYER OFFICE MANAGEMENT SYSTEM</h1>
                  
                 
                </div>
                 <!-- <h1 style="color:white;margin-left:500px;font-size:50px">MANAGEMENT SYSTEM</h1> -->
    </div>
    <!-- slider_area_start -->
  
                    <!-- <div class="container">
                     <img src="Front/img/law.png">
                       
                    </div> -->
    <!-- slider_area_end -->

    <!-- popular_property  -->
   
    <!-- /popular_property  -->
    
    <!-- home_details  -->
        <!-- /home_details  -->

    <!-- accordion  -->
   
    <!-- accordion  -->


    <!-- counter_area  -->
   
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
       <!-- /testimonial_area  -->

    <!-- team_area  -->
       <!-- /team_area  -->

    <!-- contact_action_area  -->
   
    <!-- /contact_action_area  -->

    <!-- footer start -->
    <div style="margin-bottom:-520%;"><?php include "Front/footer.php";?></div>
  
    <!--/ footer end  -->

    <!-- link that opens popup -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="Front/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="Front/js/popper.min.js"></script>
    <script src="Front/js/bootstrap.min.js"></script>
    <script src="Front/js/owl.carousel.min.js"></script>
    <script src="Front/js/isotope.pkgd.min.js"></script>
    <script src="Front/js/ajax-form.js"></script>
    <script src="Front/js/waypoints.min.js"></script>
    <script src="Front/js/jquery.counterup.min.js"></script>
    <script src="Front/js/imagesloaded.pkgd.min.js"></script>
    <script src="Front/js/scrollIt.js"></script>
    <script src="Front/js/jquery.scrollUp.min.js"></script>
    <script src="Front/js/wow.min.js"></script>
    <script src="Front/js/nice-select.min.js"></script>
    <script src="Front/js/jquery.slicknav.min.js"></script>
    <script src="Front/js/jquery.magnific-popup.min.js"></script>
    <script src="Front/js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="Front/js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="Front/js/contact.js"></script>
    <script src="Front/js/jquery.ajaxchimp.min.js"></script>
    <script src="Front/js/jquery.form.js"></script>
    <script src="Front/js/jquery.validate.min.js"></script>
    <script src="Front/js/mail-script.js"></script>


    <script src="Front/js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>