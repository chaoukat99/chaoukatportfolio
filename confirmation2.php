<?php
     include("connexion.php") 
     ?>
<!doctype html>
<html>
    <head>
        <title>Utulisateur message</title>

    </head>
    <body style="background:url(https://www.linksandbridges.com/wp-content/uploads/2018/04/patral-web-background-image.jpg);">
    <?php
    
   
    $F1=$_POST["name"];
    $F2=$_POST["email"];
    $F3=$_POST["phone"];
    $F4=$_POST["Appointment-request"];
    $F5=$_POST["horaire"];


   $sql="insert into rendez-vous(name,email,phone,day,hour)";
   $sql=$sql."values('".$F1."', '".$F2."','".$F3."','".$F4."','".$F5."')";
   mysqli_query($conn,$sql)
           or die('erreer insert');
           
        $alert = '<div class="alert-success" style=" z-index: 1;
  background:#f2f2f0;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 40px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;">
                 <span><strong>Name</strong> : "'.$K1.'" </br>
                 <strong>Email</strong>: "'.$K2.'"</br>
                 <strong>Phone</strong>: "'.$K3.'"</br>
                 <strong>Rendez-vous</strong>:Your appointement in "'.$K4.'" At "'.$K5.'" </span>
                </div>';
                echo "$alert";
               
        
         
         ?>
         </body>