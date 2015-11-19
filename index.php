<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:40
 */

// точка входа (контроллер) главная страница

include_once('model/function.php');

// Подготовка данных
$articles = article_list();

// Заголовок страницы
$title = 'Список статей';


// Вывод HTML
include ('views/main.php');


asdasdasdsad