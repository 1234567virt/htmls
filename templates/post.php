<?php 
//require_once('/opt/lampp/htdocs/workspace.my/engine/db_connect.php');  
require_once '../engine/db_connect.php';  
//require_once('../engine/funcs.php');  
require_once '../engine/funcs.php';
    //$Aftor=isset($_POST['Aftor']) ? $_POST['Aftor']:'';
   // $message=isset($_POST['Message']) ? $_POST['Message']:'';      
  //  $id=isset($_POST['id']) ? $_POST['id']: '';
  //   $date=date('Y-m-d',time());
  //   if(isset($_POST['Aftor']) && isset($_POST['Message']) && isset($_POST['id'])){
  //     $Aftor= mysqli_real_escape_string($link,  
  //     htmlspecialchars(
  //     strip_tags($_POST['Aftor'])
  //     ));
  //     $message = mysqli_real_escape_string($link,
  //     htmlspecialchars(
  //     strip_tags($_POST['Message'])
  //     ));
  //     $id = mysqli_real_escape_string($link,
  //     htmlspecialchars(
  //     strip_tags($_POST['id'])
  //     ));
  //     $sql="INSERT INTO `otziv`(`id_galerey`, `Aftor`, `text`, `date`) VALUES
  //     ('$id','$Aftor','$message','$date')";
  //     echo $sql.'<br>';
  //     mysqli_query($link,$sql);
      
  //     if(mysqli_error($link)){
  //       die(mysqli_error($link));
  //     }
  //     header("Location:catalog.php?id='$id'");
  // }

  if(isset($_POST['marka'])){
  review_nout($link,$_POST['Aftor'],$_POST['Message'],$_POST['id'],$_POST['marka']);
  }
  else{
  rewiev($link,$_POST['Aftor'],$_POST['Message'],$_POST['id']);
  }
   ?>