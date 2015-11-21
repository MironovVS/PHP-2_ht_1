<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:42
 */

include_once('model/function.php');

$id=(int)$_GET['id'];
if (!$id) {
    die("Не верный id");
}

$article_update = article_search($id);

if (isset($_POST['submit'])) {
    article_update($_POST['art_id'], $_POST['art_name'], $_POST['art_date'], $_POST['art_text']);
    die(header('Location: index.php'));}

$content='views/content-update.php';

// Вывод HTML
include ('main.php');

