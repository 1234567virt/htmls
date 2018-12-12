<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href= "./css/style.css">
    <title><?=$title ?></title>
 
    </head>
    <body>
    <?php 
   
        $title="Галерея";
        $h1="Санрайс";
        $year=date("Y");
    ?>
        <div class='container'>
             <div class="header">
             <img src='./img/logo.jpeg' alt='SonyValio' class='logo'>
                <ul>
               
                <?php //require_once '/opt/lampp/htdocs/workspace.my/templates/menu.php' ?>
                <?php  require_once('../templates/menu.php');?>    
                </ul>
                <hr>
            </div>
             
            <div class='content'>
                    <ul>
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="catalog.html">Каталог</a></li>
                       </ul>
                <h1>
                Каталог
                </h1>
              <div class='container'>
                    <?php
                         require_once "../templates/gallery(unit4).php";
                         ?>
     </div>
            <div class='footer'> 
                <hr>
                <strong>
                Все права защищены<sup>&copy;</sup> <?php echo $year; ?>
                </strong>
            </div>   
        </div>
    </body>
</html>