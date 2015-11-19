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

$content='views/content-main.php';

$content = $_GET['view'] == 'list' ? 'views/content_index_list.php'
  : 'views/content_index_table.php';



// Вывод HTML
include ('main.php');


