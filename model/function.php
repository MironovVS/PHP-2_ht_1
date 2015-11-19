<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 21:07
 */

//Подключаемся к базе данных
$server='localhost';
$username='admin';
$password='';
mysql_connect($server, $username, $password);
$db_name='PHP2_HT1-Mironov';
mysql_select_db($db_name);


//Функция добавления статьи
function article_add($name, $date, $text){
  $request="INSERT INTO `Test`(`id` ,`article_name`, `article_date`, `article_text`) VALUES ('', '$name', '$date', '$text') ";
  mysql_query($request);
}

//Функция выводит все статьи
function article_list() {
  $request=mysql_query("SELECT `id` ,`article_name`, `article_date`, `article_text` FROM `Test` ORDER BY `article_date` DESC");
  $art=array();
  while ($row=mysql_fetch_assoc($request)) {
    $art[]=$row;
  }
  return array($art);
}

//Функция выводит статью по id
function article_search($id) {
  $id=addslashes($id);
  $sql="SELECT `id`,`article_name`, `article_date`, `article_text` FROM `Test` WHERE `id`='$id'";
  $request=mysql_query($sql);
  $search=array();
  While ($row=mysql_fetch_assoc($request)) {
    $search[]=$row;
  }
  return array($search);
}


// Функция редактирования статьи
function article_update($id, $name, $text){
  $request="UPDATE `Test` SET `article_name`='$name', `article_text`='$text' WHERE `id`='$id'";
  mysql_query($request);
}
