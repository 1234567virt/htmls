<!DOCTYPE html>
<html lang="ru">
<?php
$title="Главная";
$h1="Санрайс";
?>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class='container'>
         <div class="header">
            <img src='img/logo.jpeg' alt='SonyValio' class='logo'>
            <ul>
                 <li><a href="index.html">Главная</a></li>
                 <li><a href="catalog.html">Каталог</a></li>
                 <li><a href="contact.html">Контакты</a></li>
            </ul>
            <hr>
        </div>
       
        
        <div class='content'>
            
        <h1>
         <?php echo $h1 ?>
        </h1>
        
        <h4>
            <i>Покупай или проиграешь</i> 
        </h4>
    </div>
       
        <div class='footer'> 
                <hr>
                <strong>
                   Все права защищены<sup>&copy;</sup> 
                </strong>
            </div>   
        </div>
    </body>
</html>