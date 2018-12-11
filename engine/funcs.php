<?php 

 function translite($text) {
  $alfavit=[
  "а" => 'a','б' => 'b','в'=> 'v',
  'г' => 'g','д' => 'd','е' => 'e',
  'ё' => 'e','ж' => 'zh','з' => 'z',
  'и' => 'i','й' => 'i','к' => 'k',
  'л' => 'l','м' => 'm','н' => 'n',
  'о' => 'o','п' => 'p','р' => 'r',
  'с'=>'s', 'т' => 't','у' => 'u',
  'ф' => 'f','х' =>'kh','ц' => 'ts',
  'ч' => 'ch','ш' => 'sh','щ'=> 'shch',
  'ъ'=>'ye ','ы' => 'y','э' => 'e',
  'ю' => 'iu','я' =>'ia'];
    $text = (string) $text;
    $text = function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text);
    $text = strtr($text,$alfavit);
    return $text; 
}

function replace($string)
{
    return str_replace([' ', '\''], ['_', ''], $string);
}
function url_translite($text){
  
 return replace(translite($lower));
  }


function one($path){
    $dir=scandir($path);
        foreach($dir as $key=>$val){
            if($val==='.' || $val==='..'){
                continue;
            }
            else{
                if(is_dir($path.$val)){
                     $dir=one($path.$val.DIRECTORY_SEPARATOR);
                }
                 else{
                     $info=pathinfo($path.$val);
                    if($info['extension']=='jpg'){
                     echo "<a href='".$path.$val."' target='__blank'><img src='".$path.$val."' class='catalog' width='30%'></a>";
                
                    }  
  
                         
                }
            }   
         }
}

function counts($row,$index,$link,$bd){
    $count=$row+1;
    $sql="UPDATE $bd SET `count`='$count' WHERE `id`='$index'";
    $result=mysqli_query($link,$sql);
}
function clear($link,$value){
    $value= mysqli_real_escape_string($link,  
    htmlspecialchars(
    strip_tags($value)));
    return $value;
}

function rewiev($link,$Aftor,$Message,$id){
 
    $date=date('Y-m-d',time());
    if(isset($_POST['Aftor']) && isset($_POST['Message']) && isset($_POST['id'])){
    //  $Aftor= mysqli_real_escape_string($link,  
    //  htmlspecialchars(
     // strip_tags($_POST['Aftor'])
    // ));
     // $message = mysqli_real_escape_string($link,
     // htmlspecialchars(
    //  strip_tags($_POST['Message'])
    //  ));
    //  $id = mysqli_real_escape_string($link,
     // htmlspecialchars(
     // strip_tags($_POST['id'])
     // ));
     $Aftor=clear($link,$_POST['Aftor']);
     $message =clear($link,$_POST['Message']);
      $id=clear($link,$_POST['id']);
      $date=date('Y-m-d',time());
   $sql="INSERT INTO  `otziv` (`id_galerey`, `Aftor`, `text`, `date`) VALUES ('$id','$Aftor','$message','$date')";
      mysqli_query($link,$sql);
}
    if(mysqli_error($link)){
        die(mysqli_error($link));
      }
      header("Location:../public_html/catalog.php?id='$id'");
  }

  function review_nout($link,$Aftor,$Message,$id,$marka){

    if(isset($_POST['Aftor']) && isset($_POST['Message']) && isset($_POST['id'])){
    $Aftor=clear($link,$_POST['Aftor']);
    $message =clear($link,$_POST['Message']);
     $id=clear($link,$_POST['id']);
     
     $sql="INSERT INTO  `otziv_nout` (`marka`, `Aftor`, `text`) VALUES ('$marka','$Aftor','$message')";
     mysqli_query($link,$sql);
  }
  if(mysqli_error($link)){
    die(mysqli_error($link));
  }
  header("Location:../public_html/catalog.php?id='$id'");
}
  ?>