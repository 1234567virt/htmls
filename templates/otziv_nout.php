<?php 
// require_once '../engine/db_connect.php';           
   
   
   $sql="SELECT * FROM `otziv_nout` WHERE `marka`='$marka'";
    $massiv=mysqli_query($link,$sql);
   
  echo "<br>";
   while($rower = mysqli_fetch_array($massiv)){
       echo "<hr>";
        
          echo "Автор:".$rower['Aftor']."<br>";
          echo "Текст:".$rower['text']."<br>";
         
         
 }


                         ?>