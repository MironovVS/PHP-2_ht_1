<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 21:07
 */

$server='localhost';
$username='admin';
$password='';
mysql_connect($server, $username, $password);

$db_name='PHP2_HT1-Mironov';
mysql_select_db($db_name);

function article_add($name, $date, $text){
  $request="INSERT INTO `Test`(`id` ,`article_name`, `article_date`, `article_text`) VALUES ('', '$name', '$date', '$text') ";
  mysql_query($request);
}

function article_list() {
  $request=mysql_query("SELECT `id` ,`article_name`, `article_date`, `article_text` FROM `Test` ORDER BY `article_date` DESC");
  $art=array();


  while ($row=mysql_fetch_assoc($request)) {
    $art[]=$row;
  }

  return array($art);
}

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


//
//
//
//function article_item($id) {
//  $id=addslashes($id);
//  $sql="SELECT `article_name`, `article_date`, `article_text` FROM `Test` WHERE `id`='$id'";
//  $request=mysql_query($sql);
//  $art=array();
//
//  While ($row=mysql_fetch_assoc($request)) {
//    $art[]=$row;
//  }
//  return array($art);
//}
//
//function article_del($id) {
//  $id=addslashes($id);
//  $sql="SELECT `article_name`, `article_date`, `article_text` FROM `Test` WHERE `id`='$id'";
//  $request=mysql_query($sql);
//  $art=array();
//
//  While ($row=mysql_fetch_assoc($request)) {
//    $art[]=$row;
//  }
//  return array($art);
//}
//
//function article_up($id) {
//  $id=addslashes($id);
//  $sql="SELECT `id`,`article_name`, `article_date`, `article_text` FROM `Test` WHERE `id`='$id'";
//  $request=mysql_query($sql);
//  $up=array();
//
//  While ($row=mysql_fetch_assoc($request)) {
//    $up[]=$row;
//  }
//  return array($up);
//}

function article_up_up($id, $name, $text){
  $request="UPDATE `Test` SET `article_name`='$name', `article_text`='$text' WHERE `id`=14";
  mysql_query($request);
}
