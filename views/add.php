<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:42
 */

include_once('../model/function.php');

if (isset($_GET['submit'])) {
  if ($_GET['article_name'] != "" && $_GET['article_text'] != "") {
    article_add($_GET['article_name'], $_GET['article_date'], $_GET['article_text']);
    die(header('Location: ../index.php'));
  } else {
      echo "Введите название статьи или текст статьи";
  }
}


?>


<html>
<head>
  <meta charset="UTF-8">


</head>
<body>
<header></header>
<section>
<fieldset>
  <form method="GET" name="article_add">
    Название статьи: <input type="text" name="article_name">
    Дата: <input type="date" name="article_date"><br>
    Статья: <textarea name="article_text" rows="5"></textarea><br>
    <input type="submit" name="submit" value="Сохранить">
  </form>


</fieldset>


</section>
<footer></footer>

</body>

</html>
