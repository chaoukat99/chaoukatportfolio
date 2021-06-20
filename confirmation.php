<?php
     include("connexion.php") 
     ?>
<!doctype html>
<html>
    <head>
        <title>espace client</title>

    </head>
    <body>
    <?php
    
   header('locaation:calender.html');
    $K1=$_POST["name"];
    $K2=$_POST["email"];
    $K3=$_POST["subject"];
    $K4=$_POST["message"];

   $sql="insert into contact(name,email,subject,message)";
   $sql=$sql."values('".$K1."', '".$K2."','".$K3."','".$K4."')";
   mysqli_query($conn,$sql)
           or die('erreer insert');
           
        $alert = '<div class="alert-success" style=" z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;">
                 <span>Message Sent! Thank you"'.$K1.'" for contacting us. we will answer you later</span>
                </div>';
                echo "$alert";
                echo "<div>
                <h1 style='margin-left: 43%;
                padding-top:50px;
                color:red;'>yain sahnoun</h1>
                </div>";
                echo "<center>
                <img src='OMAR_CHAOUKAT.png' style='margin-top: 30px;'' width='400px' height='400px'>
                </center>"
        
         
         ?>
         </body>
        