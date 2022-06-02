<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Packages</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- header section starts  -->
    <?php require 'partials/_nav.php'  ?>
    <!-- Header section ends -->
    <!-- Packages section start -->
    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/p-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Kufri</h3>
            <p>
              With the destination that is one of the most popular forts of the Lonavala region, this trek promises the adventure seekers a thrill that comprises of both adventure and views which are a thing to behold throughout life.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs9000 <span>Rs12000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Kiarighat</h3>
            <p>
              Trek to one of the tallest peaks of Kerala, this trek is among the most famous trekking places in India. The lush green meadows and the heart-shaped lake make for a soul-stirring recipe which is bound to influence the trekkers in the best possible manner.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs8000 <span>Rs10000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Chail</h3>
            <p>
              If it is the beauty of the distinguished state of Uttarakhand that you wish you witness at its peak, then Cloud’s End in Mussoorie is your cup of tea.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs5000 <span>Rs8000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Chembra Peak</h3>
            <p>
              If you are a mountain lover then this trek is something you must experience to explore the wilderness at its best and understand the perfection with which nature creates its balance.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs6000 <span>Rs8000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Triand Mountain</h3>
            <p>
              The view of Mount Kanchenjunga, the contours of the Himalayas and the climb of the hill, make this trek as charming as it can be imagined. 
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs9000 <span>Rs11000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Chedar Trek</h3>
            <p>
              It is the fascinating charm of the Dhauladhar Range that is the highlight of this trek. Being a moderately east trek, this trek is suitable for beginners too, but the beauty is spellbinding none the less
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">Rs10000<span>Rs15000</span></div>
            <a href="login.php" class="btn">book now</a>
          </div>
        </div>
      </div>
      <a href="holidays.php" class="btn" id="btn1">HOLIDAYS CALENDAR</a>
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
