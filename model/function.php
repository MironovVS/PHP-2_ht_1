<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 21:07
 */

//Подключаемся к базе данных

function mysqli(){
  $server='localhost';
  $username='admin';
  $password='';
  $db_name='PHP2_HT1-Mironov';
  $link = mysqli_connect($server, $username, $password, $db_name);

//mysqli_select_db($link,$db_name);

  mysqli_set_charset($link, 'utf8');
  return $link;
}



//Функция добавления статьи
function article_add($name, $date, $text){
  $name = mysqli_real_escape_string(mysqli(),$name);
  $date = mysqli_escape_string(mysqli(),$date);
  $text = mysqli_real_escape_string(mysqli(),$text);
  $request="INSERT INTO `Test`(`id` ,`article_name`, `article_date`, `article_text`) VALUES ('', '$name', '$date', '$text') ";
  mysqli_query(mysqli(), $request);
}

//Функция выводит все статьи
function article_list() {
  $request=mysqli_query(mysqli(),"SELECT `id` ,`article_name`, `article_date`, `article_text` FROM `Test` ORDER BY `article_date` DESC");
  $art=array();
  while ($row=mysqli_fetch_assoc($request)) {
    $art[]=$row;
  }
  return array($art);
}

//Функция выводит статью по id
function article_search($id) {
  $id=(int)($id);
  $sql="SELECT `id`,`article_name`, `article_date`, `article_text` FROM `Test` WHERE `id`='$id'";
  $request=mysqli_query(mysqli(),$sql);
  $search=array();
  While ($row=mysqli_fetch_assoc($request)) {
    $search[]=$row;
  }
  return array($search);
}


// Функция редактирования статьи
function article_update($id, $name, $date, $text){
  $id=(int)($id);
  $name = mysqli_real_escape_string(mysqli(),$name);
  $date = mysqli_escape_string(mysqli(),$date);
  $text = mysqli_real_escape_string(mysqli(),$text);
  $request="UPDATE `Test` SET `article_name`='$name', `article_date`='$date',`article_text`='$text' WHERE `id`='$id'";
  mysqli_query(mysqli(),$request);
}
