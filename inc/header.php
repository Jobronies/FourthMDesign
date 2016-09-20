<!DOCTYPE html>

<html>

<head>
  <!-- Stylesheet and Framework -->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!-- Slideshow -->
  <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <!-- Link to Google Resources -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet" type="text/css">
  <!-- Title and Favicon -->
  <title>Fourth Moon Design</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Meta and Credits -->
  <meta name="description" content="Fourth Moon Design">
  <meta name="keywords" content="HTML,CSS,Javascript,PHP">
  <meta name="author" content="Spencer Sproul">  
  <!-- Mobile Stuff -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:217158,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
  </head>

<body>

  <!-- Header -->

<header class="w3-top w3-hide-medium w3-hide-small">

  <!-- Announcement Bar -->

  <div id='fbar'><p>FOURTH MOON</p></div>

  <div id='abar'>
    <p>CHECK OUT OUR NEW SHOP! PLACE YOUR ORDER TODAY!<a id="cart" href="http://shop.fourthmoondesign.com"><span class="material-icons">shopping_cart</span></a></p>
  </div>

  <!-- Navigation -->

  <ul class="navbar">
    <li id="logo"><a href="index.php"><img class="logo" src="img/navlogo-invert.png" alt="logo"></a></li>
    <li><a href="http://shop.fourthmoondesign.com">Shop</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="custom.php">Custom</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</header>

<!-- Mobile Header -->

<header style="background-color:#FFF;" class="w3-top w3-hide-large">

  <nav class="w3-sidenav w3-animate-left w3-top" style="display:none">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-dark-grey"><span class="material-icons">clear</span> Menu</a>
    <a href="index.php"><span class="material-icons">home</span> Home</a>
    <a href="about.php"><span class="material-icons">info</span> About</a>
    <a href="http://shop.fourthmoondesign.com"><span class="material-icons">shopping_cart</span> Shop</a>
    <a href="custom.php"><span class="material-icons">mode_edit</span> Custom</a>
    <a href="contact.php"><span class="material-icons">phone</span> Contact</a>
  </nav>

  <div class="w3-top topbar w3-container">
    <span class="w3-opennav w3-xlarge" onclick="w3_open()"><span id="menui" class="material-icons w3-xxlarge">menu</span></span>
    <img id="logom" src="img/navlogo-invert.png" alt="Logo">
  </div>

  <script>
    function w3_open() {
      document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    }

    function w3_close() {
      document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    }
  </script>

  <div id="mfbar"><p>FOURTH MOON</p></div>
  <div id="mabar"><p>CHECK OUT OUR NEW SHOP!<br>PLACE YOUR ORDER TODAY!</p></div>


</header>