<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
        $sql = "SELECT * FROM users WHERE username= '$username'  AND password='$password' " ;
        $result = mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if ($num==1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            $sql = "SELECT * FROM users WHERE username= '$username'  AND password='$password' " ;
            $rslt=mysqli_query($conn, $sql);
            $uid=mysqli_fetch_assoc($rslt);
            $_SESSION['user_id']=$uid["sno"];
            header("location:/php_login/welcome.php");
            
        }
    
    else{
        $showError="User Does Not Exist";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Log In</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
</head>


<body class="sign">
<?php require 'partials/_nav.php'  ?>
  <h1 class="heading" >
    <br><br><br>
    <span>L</span>
    <span>o</span>
    <span>g</span>

    &nbsp;
    &nbsp;
    <span>I</span>
    <span>n</span>

  </h1>
  <?php
    if($showError){
    echo ' <div class="alert">
        <p>Error!</p> '. $showError.'
        
    </div> ';
    }
    ?>
  <section class="login-section">
    <form id="login-form" method="post" action="/php_login/login.php" >
     
      <label class="login-label"><b>User Name
        </b>
      </label><br>

      <input type="text" name="username" id="uname"  placeholder="User Name" max-length="120" pattern='[a-zA-Z0-9]+' required autofocus>
      <br><br>
      
      <label class="login-label"><b>Password
      </b>
      </label><br>
      <input type="Password" name="password" id="pass" placeholder="Password" required>
      <br><br>
      
      <input class="logbtn" type="reset" value="reset">
      <input class="logbtn" type="submit" value="submit">
      <br><br>
     
      <br><br>
      <a class="login-a" href="signup.php">Sign Up</a>
    </form>
    <?php
        if($login){
            echo "<br> SUCCESS";
        }
    ?>
  </section>
<footer class="footer" id="login-foot">
  <h1 class="credit"> <span> &copy; WOLKE TREK </span> | all rights reserved! </h1>

</footer>

</body>
</html>