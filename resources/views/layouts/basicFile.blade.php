
<!-- all the CSS files and js files and lib goes here!! -->
<html>
    <head>
        <style>
            .farmer-logo-img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: relative;
            top:-6px;
          }
          </style>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/mag_logo_sp.png" rel="icon">
        <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open  +Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- fontaesome file -->
  <script src="https://kit.fontawesome.com/4cd0f195bd.js" crossorigin="anonymous"></script>

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
{{--  Weather api for general wheather. --}}
{{-- <!-- for weahter prediction with auto locaiton  --> --}}
<script>
    function weather() {
    
      var location = document.getElementById("location");
      var apiKey = 'a75a39c3d635c5c43f461a23b0d0037b'; // PLEASE SIGN UP FOR YOUR OWN API KEY
      var url = 'https://api.forecast.io/forecast/';
    
      navigator.geolocation.getCurrentPosition(success, error);
    
      function success(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
    
         $.getJSON(url + apiKey + "/" + latitude + "," + longitude + "?callback=?", function(data) {
             temp_f = data.currently.temperature;
             temp_c = (temp_f - 32)*(5/9);
             temp_c_roundOff = Math.round(temp_c * 100) / 100;
          $('#temp').html(temp_c_roundOff + '° c');
          $('#minutely').html(data.minutely.summary);
        });
      }
    
      function error() {
        location.innerHTML = "Unable to retrieve your location";
      }
    
    }
    weather();
</script>
    </head>
    <body>
        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/mobile-nav/mobile-nav.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
@yield('content')
