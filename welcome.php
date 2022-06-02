<?php
    require 'partials/_dbconnect.php'; 
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
        header("location:/php_login/login.php");
        exit;            
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Welcome</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
    
</head>


<body>
    <br>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Wolke Trek</h1>
        </div>
        <ul>
            <br>
            <li><a href="/php_login/welcome.php"><img src="images/dash.png" alt="icon" height="30px" width="30px"></a>&nbsp; <span>Dashboard</span> </li>
            <li><a href="/php_login/welcome.php"><img src="images/userbg.png" alt="icon" height="30px" width="30px"></a>&nbsp;<span>Profile</span> </li>
            <li><a href="#"><img src="images/giftbg.png" alt="icon" height="30px" width="30px"></a>&nbsp;<span>Wolke Money</span> </li>
            
            <li><a href="/php_login/faq.php"><img src="images/faq.png" alt="icon" height="30px" width="30px"></a>&nbsp; <span>Help</span></li>
            <li><a href="/php_login/logout.php"><img src="images/settings.png" alt="icon" height="30px" width="30px"></a>&nbsp;<span>Log Out</span> </li>
        </ul>
    </div>
    <?php?>
    <div class="container">
         <?php require 'partials/_nav.php'  ?>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>Hello,</h1>
                        <?php 
                            echo "<div style='font-size:20px;'>".$_SESSION["username"]."</div>";?>
                    </div>
                    <div class="icon-case">
                        <img src="images/user.png" alt="icon" height="50px" width="50px">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php
                            $userid=$_SESSION["user_id"];
                            $sql="SELECT * FROM reward WHERE user_id= '$userid' ";
                            $rslt=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($rslt)==0){
                                echo'<h1>0</h1>';
                            }
                            else{
                                $rewp=mysqli_fetch_assoc($rslt);
                                echo'<h1>'.$rewp["rewpoint"].'</h1>';
                            }
                            
                        ?>
                        
                        <h3>Wolke Money</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/gift.gif" alt="icon" height="50px" width="50px">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                        include 'time.php';
                        $sql="SELECT * FROM comptrip WHERE user_id= '$userid' ";
                            $rslt=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($rslt)==0){
                                echo'<h1>0</h1>';
                            }
                            else{
                                $rewp=mysqli_fetch_assoc($rslt);
                                echo'<h1>'.$rewp["ct"].'</h1>';
                            }
                    ?>
                        <h3>Trips Completed</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/done.gif" alt="icon" height="50px" width="50px">
                    </div>
                </div>
                
            </div>
            <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
            &nbsp;
            &nbsp;
            <span>d</span>
            <span>e</span>
            <span>t</span>
            <span>a</span>
            <span>i</span>
            <span>l</span>
            <br><br>
            
            <?php
            echo '<table class="prof-table">
                    <tr class="prof-tr">
                        <th class="prof-th">BOOK ID</th>
                        <th class="prof-th">DESTINATION</th>
                        <th class="prof-th">MONTH</th>
                        <th class="prof-th">Number Of Guests</th>
                    </tr>';
                $userid=$_SESSION["user_id"];
                $sql = "SELECT * FROM book WHERE u_id= '$userid' ";
                $result = mysqli_query($conn, $sql);
                $num=mysqli_num_rows($result);
                for($i=0;$i<$num;$i++){
                    $det=mysqli_fetch_assoc($result);
                    if($num>0){
                        echo '<tr class="prof-tr">
                        <td class="prof-td">'.$det["book_id"].'</td>
                        <td class="prof-td">'.$det["destination"].'</td>
                        <td class="prof-td">'.$det["month"].'</td>
                        <td class="prof-td">'.$det["guestnum"].'</td>
                    </tr>';
                    }
                }
                echo '</table>';
                
            ?>
     


</body>

</html>