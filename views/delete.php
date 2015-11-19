<?php
$server='localhost';
$username='Test';
$password='';
mysql_connect($server, $username, $password);

$db_name='Test';
mysql_select_db($db_name);

// подключаем библиотеки
require_once('../model/function.php');


$article_del = article_search($_GET['id']);


?>
<?php foreach ($article_del as $del):
for ($i = 0 ; $i < count($del); $i++):
  $del_name=$del["$i"]['article_name'];
  $sql="DELETE FROM `Test` WHERE `article_name` = '$del_name'";
  mysql_query($sql);
  echo "Статья $del_name удалена";

  ?>


    <?php endfor?>
  <?php endforeach?>
<br>
<a href="../index.php">К списку статей</a>