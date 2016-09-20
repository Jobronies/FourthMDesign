<?php include 'inc/header.php' ?>
<!-- Content -->

<p style="margin-top:100px;" class="title">Get in Touch.</p>

<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $from = 'From: ContactForm';
    $to = 'support@fourthmoondesign.com';
    $subject = 'FORM INQUIRY';

    $body = "From: $fname\n $lname\n Email: $email\n Message:\n $msg";

    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}
?>

<form method="post" action="contact.php" class="w3-container w3-half">

  <label class="w3-label w3-text-blue"><strong>First Name</strong></label>
  <input class="w3-input w3-border" name="fname" type="text">

  <label class="w3-label w3-text-blue"><strong>Last Name</strong></label>
  <input class="w3-input w3-border" name="lname" type="text">

  <label class="w3-label w3-text-blue"><strong>Email</strong></label>
  <input class="w3-input w3-border" name="email" type="email">

  <label class="w3-label w3-text-blue"><strong>Message</strong></label>
  <textarea class="w3-input w3-border" name="msg"></textarea>

  <input id="submit" name="submit" type="submit" value="Submit" style="margin-top:10px;" class="w3-btn w3-blue">

</form>

<p class="w3-half" style="font-family:'Montserrat';float:right;text-align:center;">
  Fourth Moon Design
  <br>(503) 747 8075
  <br>support@fourthmoondesign.com
  <br>
  <br>Hours
  <br>Monday - Friday
  <br>9AM - 5PM
  <br>Saturday & Sunday
  <br>CLOSED
  <br><a href="https://twitter.com/fourthmdesign"><img style="width:50px;margin-top:10px;" src="img/twitter.png" alt="twitter"></a>
</p>

<div id="map">
  <iframe style="border:none;width:100%;height:300px;" src="https://www.google.com/maps/embed/v1/place?q=Sherwood,+OR,+United+States&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
    <div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div>
    <div><small><a href="http://premiumlinkgenerator.com">premium link generator for 2016</a></small></div>
  </iframe>
</div>

<footer>
  <p>Copyright (c) 2016 Copyright Fourth Moon Design | All Rights Reserved</p>
</footer>


</body>
</html>
