<?php include 'inc/header.php'; ?>

<!-- Content -->

<div class="slideshow">
  <div><a href="http://shop.fourthmoondesign.com"><img src="img/slide/forest.jpg" alt="slide"></a></div>
  <div><a href="http://shop.fourthmoondesign.com"><img src="img/slide/skyline.jpg" alt="slide"></a></div>
  <div><a href="http://shop.fourthmoondesign.com"><img src="img/slide/chrispetebridge.jpg" alt="slide"></a></div>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slideshow').slick();
    });

    $('.slideshow').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      adaptiveHeight: true,
      pauseOnHover: false,
      arrows: false,
  });
</script>

<div class="w3-half">
    <img src="img/customapparel.jpg" alt="custom_apparel">
    <div style="text-align:center;" class="w3-container">
      <p style="font-family:'Amatic SC';font-size:42px;font-weight:bold;margin:0;">CUSTOM APPAREL</p>
      <p style="font-family:'Amatic SC';font-weight:bold;margin:0;margin-bottom:20px;word-wrap:break-word;">
        WE OFFER THE OPTION OF CUSTOM DESIGNS. IF YOU WOULD PREFER TO HAVE AN
        IMAGE OF YOUR OWN ON A HOODIE OR T-SHIRT, WE CAN DO IT. WE SELL CUSTOM
        DESIGNS IN BULK OR SINGLES.</p>
          <a class="button" href="custom.php">SHOP</a>
    </div>
</div>

<div class="w3-half">
    <img id="down" src="img/summertees.jpg" alt="summer_tees">
    <div style="text-align:center" class="w3-container">
      <p style="font-family:'Amatic SC';font-size:42px;font-weight:bold;margin:0;">SUMMER TEES</p>
      <p style="font-family:'Amatic SC';margin:0;font-weight:bold;margin-bottom:20px;word-wrap:break-word;">
        START YOUR SUMMER RIGHT WITH A NEW FOURTH MOON T-SHIRT. CHOOSE ONE OF
        OUR MULTIPLE DESIGNS, FRONT OR BACK. OUR APPAREL IS NOW AVAILIBLE IN
        DIFFERENT COLOR AND ALL SIZES.</p>
        <a class="button" href="http://shop.fourthmoondesign.com">SHOP</a>
    </div>
</div>

<a href="http://shop.fourthmoondesign.com"><img style="margin-top:20px;" src="img/double.jpg" alt="double_image"></a>

<div class="featured">

<img style="width:40%;display:block;margin:0 auto;margin-top:1px;" src="img/featureditems.jpg" alt="featured_items">

<div class="w3-quarter">
    <img src="img/chriscar.jpg" style="width:100%" alt="cloud_design">
    <div class="w3-container">
      <p>Cloud Design<br>$15</p>
      <a href="http://shop.fourthmoondesign.com">SHOP</a>
    </div>
</div>

<div class="w3-quarter">
  <img src="img/trevortracks.jpg" style="width:100%" alt="mountain_design">
  <div class="w3-container">
    <p>Mountain Design<br>$15</p>
    <a href="http://shop.fourthmoondesign.com">SHOP</a>
  </div>
</div>

<div class="w3-quarter">
  <img src="img/peterabout.jpg" style="width:100%" alt="large_logo">
  <div class="w3-container">
    <p>Large Logo<br>$15</p>
    <a href="http://shop.fourthmoondesign.com">SHOP</a>
  </div>
</div>

<div class="w3-quarter">
  <img src="img/ian.jpg" style="width:100%" alt="portland_hoodie">
  <div class="w3-container">
    <p>Portland Hoodie<br>$30</p>
    <a href="http://shop.fourthmoondesign.com">SHOP</a>
  </div>
</div>

</div>

<footer>
  <p>Copyright (c) 2016 Copyright Fourth Moon Design | All Rights Reserved</p>
</footer>

</body>

</html>