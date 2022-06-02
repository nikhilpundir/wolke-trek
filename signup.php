<?php
session_start();

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    $existsql = "SELECT * FROM users WHERE username= '$username'" ;
    $result = mysqli_query($conn, $existsql);
    $numrows=mysqli_num_rows($result);
    if ($numrows>0){
        $showError = "Username Already Exists";
        $exists=true;
    }
    else{
        if(($password == $cpassword) && $exists==false){
            $sql = "INSERT INTO `users` ( `username`, `name`, `email`, `password`, `dt`) VALUES ('$username','$name','$email', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<?php require 'partials/_nav.php'  ?>

<body class="sign">
<h1 class="heading" >
    <br><br><br>
    <span>S</span>
    <span>i</span>
    <span>g</span>
    <span>n</span>

    &nbsp;
    &nbsp;
    <span>U</span>
    <span>p</span>

  </h1>
<?php
    if($showAlert){
    echo '
      <div class="success">
      <p>Alert!</p> Sign up Successfull
      </div> ';
    }
    if($showError){
    echo ' 
      <div class="alert">
      <p>FAILED!</p> '. $showError.'  
      </div> ';
    }
    ?>

  <section class="login-section">
    <form id="login-form" method="post" action="/php_login/signup.php">
      <label class="login-label"><b>Name
        </b>
      </label><br>
      <input type="text" name="name" id="name" placeholder="Name" pattern='[a-zA-Z]+ *[a-zA-Z]*' required autofocus>
      <br><br>
      <label class="login-label"><b>User Name
        </b>
      </label><br>

      <input type="text" name="username" id="uname" placeholder="User Name" max-length="120" pattern='[a-zA-Z0-9_]+' required>
      <br><br>
      <label class="login-label"><b>Email
        </b>
      </label><br>
      <input type="email" name="email" id="email" placeholder="Email" max-length="120" pattern='[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+' required>
      <br><br>
      
      <label class="login-label"><b>Password
      </b>
      </label><br>
      <input type="Password" name="password" id="pass" placeholder="Password"  required>
      <br><br>
      <label class="login-label"><b>Confirm Password
      </b>
      </label><br>
      <input type="Password" name="cpassword" id="cpass" placeholder="Confirm Password"  required>
      <br><br>
      <input class="logbtn" type="reset" value="reset">
      <input class="logbtn" type="submit" value="submit">
      <br><br>
      <!-- <input type="checkbox" id="check">
      <span class="login-span">Remember me</span> -->
      <br><br>
    </form>
  </section>
<footer class="footer" id="login-foot">
  <h1 class="credit"> <span> &copy; WOLKE TREK </span> | all rights reserved! </h1>

</footer>

 
</body>
</html>