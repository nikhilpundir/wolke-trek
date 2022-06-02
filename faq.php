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
    <style>
        details {
            font-family: "Nunito", sans-serif;
            font-size: 30px;
            color: white;
            width:90%;
            margin-left: 5%;
            margin-bottom: 1em;
            
        }

        details >summary {
            padding: 10px;
            background-color: #333;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.658);
            cursor: pointer;
            list-style: none;
        }

        details >p {
            background-color: #333;
            padding: 2px 6px;
            margin: 0.3em;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.658);
        }
        #button{
            text-align: center;
            padding-bottom: 20px;
        }
    </style>

</head>

<body>
    <!-- header section starts  -->
    <?php require 'partials/_nav.php'  ?>

    <div class="detail">
        <h1 class="heading">
            <br><br>
            <span>f</span>
            <span>a</span>
            <span>q</span>
            <span>'</span>
            <span>s</span>

        </h1>
        <details>
            <summary>What is Trekking?</summary>
            <p>When at home this activity is called backpacking. When you find yourself halfway
                around the world, this traditional way of traveling long distances on trails is called Trekking. A trek
                is a
                journey. A journey through a different country and culture. In the days of the British Raj, these treks
                were
                a way to explore vast areas of previously unexplored territory and could last months or even years.</p>
        </details>
        <details>
            <summary>What do I need to cary?</summary>
            <p>Unlike backpacking, when on a trek you will only be required to carry those items
                needed for the day of walking. All of the group personal gear and camping equipment is carried by a trained
                group of porters or pack animals (ponies, yaks, llama, camels…)</p>
        </details>
        <details>
            <summary>How do I get in shape for trek?</summary>
            <p>You don’t need to be a super athlete to go on a trek. Anyone in reasonably good shape
                can participate and we will assist you in making sure you get on the proper trip for your abilities.
                Activities such as walking, hiking, running, biking, swimming and lifting weights undertaken three days a
                week are all great ways to prepare for your trip.</p>
        </details>
    </div>
    <div id="button" ><a href="book.php" class="btn">Discover more</a></div>
    
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