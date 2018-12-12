<?php
  // require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
    require_once '../engine/init.php';
   $id=$_GET['id'];
   $sql="SELECT * FROM `product`";
     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
     $num_rows = mysqli_num_rows( $result);
     if($num_rows>0){
     while ($row = mysqli_fetch_array($result))
         {
             echo "<a href='product.php?id=".$row['id']."' target='_blank'><img src='".$row['src']."' width='30%' class='catalog' >".$row['count']."</a>";
         }  
        }
        else {
             echo "Ошибка";
        }
   

?>