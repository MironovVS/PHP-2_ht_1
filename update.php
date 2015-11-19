<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:42
 */

include_once('model/function.php');

$id=$_GET['id'];

$article_update = article_search($id);

$art_id=$_GET['art_id'];
$art_name=$_GET['art_name'];
$art_date=$_GET['art_date'];
$art_text=$_GET['art_text'];

if (isset($_GET['submit'])) {
    article_update($art_id, $art_name, $art_date, $art_text);
    die(header('Location: index.php'));}

$content='views/content-update.php';

// Вывод HTML
include ('main.php');

