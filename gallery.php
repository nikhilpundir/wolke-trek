<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <title>Gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- header section starts  -->

        <?php require 'partials/_nav.php'  ?>

<!-- Header section ends -->
    <!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/g-1.jpg" alt="">             
            <div class="content">
                <h3>Kufri</h3>
                <p>Starting at the Gangotri glacier, this trek traverses the hiker through two other glaciers namely the Meru Glacier and Kirti Bamak Glacier</p>
            </div>
        </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Kiarighat</h3>
                    <p>One of the major attractions of Himachal region, this trek is adventurous and beautiful all at the same time</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Chail</h3>
                    <p>One of the most commendable sights plays a host to the travelers when you hike along the Kuari Pass trek.</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Rupin Trek</h3>
                    <p>Heading towards the Chandrashila Peak, this trek offers the hikers a route with splendid options.</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Shimla</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Flowers Trek</h3>
                    <p>One of the distinguished specialties of this trek is that it is among the most beautiful treks of the Uttarakhand. </p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>Cloud Ends</h3>
                    <p>The valley that is locally exclaimed by the name of Valley Of Gods is the final destination of this trek</p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>Chembra Peak</h3>
                    <p>Another one of the treks of the Zanskar Valley, this trek is one of a kind. Hiking takes a new form when you try to traverse the distance </p>

                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>Rajmachi Trek</h3>
                    <p>With the destination that is one of the most popular forts of the Lonavala region, this trek promises the adventure seekers a thrill that comprises of adventure</p>

            
                </div>
            </div>
            
        </div>
        <div class="content">
        
        <a href="testimonials.php" class="btn" id="btn1">TESTIMONIALS</a>
        <a href="faq.php" class="btn" id="btn1">FAQ'S</a>

        </div>
        
    </section>
    
    <!-- gallery section ends -->
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