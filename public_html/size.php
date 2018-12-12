<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Каталог товаров</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/size.css">
    </head>
    <body>
  <?php
  require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');
  require_once('../engine/funcs.php');
      $id=$_GET['id'];
      $sql="SELECT * FROM `gallery` WHERE id=$id";
         $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
       while ($row = mysqli_fetch_array($result))
     {
        echo "<img src='".$row['img']."' id='size'>";
        echo "<div id='count'>".$row['count']."</div>";
           counts($row['count'],$id,$link);
      }
?>
  </body>
  </html>