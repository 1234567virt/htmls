Задание 1
calc(1);
Задание 2

3. Задание Добавить функционал отзывов в имеющийся у вас проект
require_once "../templates/gallery(unit5).php";-подключает функцию генерации страницы товаров

require_once "../templates/otziv.php";-подключает функцию ввывода отзывов
require_once "../templates/otziv_nout.php";-подключает функцию ввывода отзывов о товаре
require_once "../templates/form_rev.php";-подключает функцию возможности оставить отзыв о странице каталога
require_once "../templates/form_nout.php";-подключает функцию возможности оставить отзыв о товаре
../public_html/product.php"-страница генерирущая страницу товара
require_once "../engine/funcs.php";-функция clear()-чистка данных от мусора
функция rewiev($link,$Aftor,$Message,$id)-запись отзыва о каталоге в БД
функция  review_nout()-запись отзыва о товаре в БД

