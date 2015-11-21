<?php

// подключаем библиотеки
require_once('model/function.php');

$id=(int)$_GET['id'];
if (!$id) {
  die("Не верный id");
}

$article = article_search($id);

$content='views/content-article.php';

// Вывод HTML
include ('main.php');

