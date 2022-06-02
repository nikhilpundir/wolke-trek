<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Wolke Treck</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  
  <?php require 'partials/_nav.php'  ?>
  <section class="home" id="home">
    <div class="content">
      <h3>adventure is worthwhile</h3>
      <p>dicover new places with us, adventure awaits</p>
      <a href="book.php" class="btn">discover more</a>
    </div>

    <div class="video-container">
      <video src="images/vid-1.mp4" id="video-slider" autoplay muted loop></video>
    </div>
  </section>

  <!-- home section ends -->

  <!-- services section starts  -->

  <section class="services" id="services">
    <h1 class="heading">
      <span>s</span>
      <span>e</span>
      <span>r</span>
      <span>v</span>
      <span>i</span>
      <span>c</span>
      <span>e</span>
      <span>s</span>
    </h1>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>Enjoy awesome Hotel with amazing views of mountains</p>
      </div>
      <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p>Enjoy Amazing food from pahad se and get you taste buds a good trip</p>
      </div>
      <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>safty guide</h3>
        <p>We ensure Your safety with the help of our expert guides throughout your journey</p>
      </div>
      <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>around the world</h3>
        <p>Our aim is to take Wolketrek all over the world</p>
      </div>
      <div class="box">
        <i class="fas fa-mountain"></i>
        <h3>Explore</h3>
        <p>Explore the beautiful valleys and views of himachal pradesh</p>
      </div>
      <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p>Get out of your home and book a trip with us</p>
      </div>

    </div>
  </section>

  <!-- services section ends -->

  <!-- footer section  -->

  <footer class="footer">

      <div class="box-container">
  
        <div class="box">
          <h3>about us</h3>
          <p>We WolkeTrek The Himalayas Leading Company Of India, Are The Team Of Well Experienced & Equipped Personnel, We Have Been Organizing Treks, And Mountaineering,At Entire India Himalayas.</p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <table class="footer-table">
            <tr class="foot-tr">
              <th class="foot-th">Locations</th>
              <th class="foot-th">Contact</th>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">New Delhi</td>
              <td class="foot-td">1234567890</td>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">Mumbai</td>
              <td class="foot-td">9876543210</td>
  
            </tr>
            <tr class="foot-tr">
              <td class="foot-td">Hyderabad</td>
              <td class="foot-td">6547893210</td>
  
            </tr>
          </table>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="booking.php">book</a>
          <a href="book.php">packages</a>
          <a href="gallery.php">gallery</a>
          <a href="blogs.php">Blogs</a>
          <a href="contact.php">contact</a>
          <a href="faq.php">FAQ</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
  
      </div>
  
      <h1 class="credit"> <span> &copy; WOLKE TREK </span> | all rights reserved! </h1>
  
    </footer>
</body>

</html>