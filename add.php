<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:42
 */

include_once('model/function.php');

if (isset($_GET['submit'])) {
  if ($_GET['article_name'] != "" && $_GET['article_text'] != "") {
    article_add($_GET['article_name'], $_GET['article_date'], $_GET['article_text']);
    die(header('Location: index.php'));
  } else {
      echo "Введите название статьи или текст статьи";
  }
}

$content='views/content-add.php';

// Вывод HTML
include ('main.php');