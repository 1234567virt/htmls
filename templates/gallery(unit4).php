<?php
   $id=(int)$_GET['id_galerey'];
   $sql="SELECT * FROM `gallery` WHERE id_galerey=$id order by count desc";
     $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
     
     while ($row = mysqli_fetch_array($result))
         {
             echo "<a href='size.php?id=".$row['id']."'   target='_blank'><img src='".$row['img']."' title='".$row['title']."'alt='".$row['alt']."' width='".$row['size']."%' class='catalog' >".$row['count']."</a>";
         }  
    
   

?>
