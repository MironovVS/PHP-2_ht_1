<?php
$server='localhost';
$username='Test';
$password='';
mysql_connect($server, $username, $password);

$db_name='Test';
mysql_select_db($db_name);

// подключаем библиотеки
require_once('../model/function.php');


$article = article_search($_GET['id']);


?>
<html>
<head>
  <link href="../css/css-main.css" rel="stylesheet" type="text/css">
  <?php echo $title ?>
</head>

<body>
  <table>
  <tbody>
  <tr>
    <td>Название статьи</td>
    <td>Дата создания</td>
    <td>Текст статьи</td>
  </tr>
<?php foreach ($article as $art):
  for ($i = 0 ; $i < count($art); $i++):?>
    <tr>
      <td><?php echo $art["$i"]['article_name']?></a></td>
      <td><?php echo $art["$i"]['article_date']?></td>
      <td><div><?php echo $art["$i"]['article_text']?></div></td>
    </tr>
  <?php endfor?>
<?php endforeach?>
</tbody>
    </table>
<a href="../index.php">К списку статей</a>
</body>
</html>