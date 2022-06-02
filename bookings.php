<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
        header("location:/php_login/login.php");
        exit;            
    }
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $destination = $_POST["dest"];
        $guestnum = $_POST["guestnum"];
        $month = $_POST["month"];
        $userid=$_SESSION["user_id"];
        $existsql = "SELECT * FROM book WHERE u_id='$userid' AND destination= '$destination' AND month='$month' AND guestnum='$guestnum'  " ;
        $result = mysqli_query($conn, $existsql);
        $numrows=mysqli_num_rows($result);
        if ($numrows>0){
            $showError = "Already BOOKED";
        }
        else{
                $sql = "INSERT INTO `book` (`u_id`, `destination`, `month`, `guestnum`, `dt`) VALUES ('$userid', '$destination', '$month', '$guestnum', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                }
                $sql="SELECT * FROM reward WHERE user_id='$userid' ";
                $rew = mysqli_query($conn, $sql);
                $numrows=mysqli_num_rows($rew);
                if($numrows>0){
                  $sql = "UPDATE `reward`
                          SET `rewpoint`=rewpoint+500 
                          WHERE user_id='$userid'";
                  mysqli_query($conn, $sql);
                  
                }else{
                  $sql = "INSERT INTO `reward` (`user_id`, `rewpoint`) VALUES ('$userid', '500')";
                  mysqli_query($conn, $sql);
                }
                
                
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Booking</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <!-- header section starts  -->
    <?php require 'partials/_nav.php'  ?>

    
<section class="book">
<?php
    
    ?>
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>
        <?php
            if($showAlert){
              echo '
                <div class="success">
                <p>Alert!</p> Booking Successfull
                </div> ';
            }
            if($showError){
              echo ' 
                <div class="alert">
                <p>FAILED!</p> '. $showError.'  
                </div> ';
            }
        ?>
      
        <div class="row">
    
            <div class="image">
                <img src="images/Tyche-plugins-BOOKING.png" alt="">
            </div>
    
            <form action="/php_login/bookings.php" method="post">
                <div class="inputBox">
                <h3>where to</h3>
                <select name="dest" >
                <option value="Kiarighat" selected>Kiarighat</option>
                <option value="Kufri">Kufri</option>
                <option value="Chail">Chail</option>
                <option value="Kufri">Chembra peak</option>
                <option value="Chail">Triand Mountain</option> 
                <option value="Kufri">Chedar Trek</option>
                               
              </select>
                    
                    <!-- <input type="text" placeholder="place name" name="dest"> -->
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests" min="1" value="1" name="guestnum" require>
                </div>
                <div class="inputBox">
                <h3>Month of Tour</h3>
                <select name="month" require>
                <option value="September" selected>September</option>
                <option value="October" >October</option>
                <option value="November">November</option>
                <option value="December">December</option>                
              </select>
                </div>
                
                <input type="submit" class="btn" value="book now">
            </form>
    
        </div>
    
    </section>
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