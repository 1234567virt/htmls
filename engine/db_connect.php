<?php 
require_once('/opt/lampp/htdocs/workspace.my/engine/pass.php');
$link = mysqli_connect($host, $user,$password,$bd) 
    or die("Ошибка " . mysqli_error($link)); 
    ?>