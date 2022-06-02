<?php

    date_default_timezone_set("Asia/Calcutta");  
    $userid=$_SESSION["user_id"];
    $sql="SELECT * FROM book WHERE u_id= '$userid' ";
    $rslt=mysqli_query($conn,$sql);
    $nr=mysqli_num_rows($rslt);
    for($i=0;$i<$nr;$i++){
        $rewp=mysqli_fetch_assoc($rslt);
        $d=strtotime($rewp["dt"]);
        if((date("Y-m-d", $d)==date("Y-m-d")  && date("i", $d)+1<=date("i")) || date("h", $d)<date("h")){
            $sql="SELECT * FROM comptrip WHERE user_id='$userid' ";
            $rew = mysqli_query($conn, $sql);
            $numrows=mysqli_num_rows($rew);

            if($numrows>0){
            $sql = "UPDATE `comptrip`
                SET `ct`=ct+1 
                WHERE user_id='$userid'";
                mysqli_query($conn, $sql);
              
            }else{
                  $sql = "INSERT INTO `comptrip` (`user_id`, `ct`) VALUES ('$userid', '1')";
                  mysqli_query($conn, $sql);
            }

            $sql="DELETE FROM book WHERE u_id= '$userid' ";
            $rslt=mysqli_query($conn,$sql);
        }
    }
    
    // for($i=0;$i<$nr;$i++){
    //     $rewp=mysqli_fetch_assoc($rslt);
    //     $g=strtotime($rewp["month"].'1 11:59pm');
    //     echo date("Y-m-d h:i:s", $g);
    //     $d=strtotime($rewp["dt"]);
    //     if(date("m", $g)+1<=date("m")){
    //         $_SESSION["tpcomp"]+=1;
    //     }
    // }
    
   
?>