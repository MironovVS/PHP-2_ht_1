<?php

// подключаем библиотеки
require_once('model/function.php');

$article = article_search($_GET['id']);

$content='views/content-article.php';

// Вывод HTML
include ('main.php');

