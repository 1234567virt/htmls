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

function counts($row,$id,$link,$bd){
 
    $sql="UPDATE $bd SET `count`=count+1 WHERE `id`='$id'";
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


function plus ($p1,$p2){
    return $p1+$p2;
}

function minus ($p1,$p2){
    return $p1-$p2;
}

function del($p1,$p2){
    if($p1>0 && $p2>0){
    return $p1/$p2;
    }
    else{
        return 'Ошибка';
    }
}

function ymn($p1,$p2){
    return $p1*$p2;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '-':
           return minus($arg1,$arg2);
        break;
        case '+':
           return plus($arg1,$arg2);
        break;
        case "*":
           return ymn($arg1,$arg2);
        break;
        case "/":
           return del($arg1,$arg2);
        break;
    }
}
  ?>