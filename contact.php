<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Contact Us</title>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php require 'partials/_nav.php'  ?>

    <section class="contact" id="contact">
  
        <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        &nbsp;
        &nbsp;
        <span>U</span>
        <span>s</span>
        
    </h1>

    <div class="row"> 

        <div class="image-div">
            <img src="images/Untitled-5.png" alt="" width="400px",height="250px">
        </div>

        <form action="thankyou.html">
            <div class="inputBox">
                <input type="text" placeholder="NAME">
                <input type="email" placeholder="EMAIL">
            </div>
            <div class="inputBox">
                <input type="phone" placeholder="CONTACT" pattern="[0-9]{10}">
                <input type="text" placeholder="ADDRESS">
            </div>
            <textarea placeholder="FEEDBACK:" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="Send">
        </form>

    </div>
    
    
</section>
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