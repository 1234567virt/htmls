<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
       
 
  <form action="<?echo "calc(1).php";?>" method="post">
        <input type="text" placeholder="Значение 1" name="numberOne" required>
        <input type="text" placeholder="Значение 2" name="numberTwo" required>
    <p><select name="hero" required>
     <option disabled></option>
     <option value="+">+</option>
     <option  value="-">-</option>
     <option  value="*">*</option>
     <option  value="/">/</option>
    </select></p>
    <p><input type="submit" value="Отправить"></p>
   </form>
<?php 
if(isset($_POST['hero']) && isset($_POST['numberOne']) && isset($_POST['numberTwo'])){
   // echo $_POST['hero'];
   // echo $_POST['numberOne'];
    

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
    function clear($value){
        $value=htmlspecialchars(
        strip_tags($value));
        return $value;
    }
    $result=mathOperation(clear($_POST['numberOne']),clear($_POST['numberTwo']),clear($_POST['hero']));
    echo "<span style='color:green;font-size:15px'>Ответ:".$result."<span>";
}

?>
</body>
</html>