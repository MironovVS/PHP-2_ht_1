<?php
/**
 * Created by PhpStorm.
 * User: ЛарисаСлава
 * Date: 18.11.2015
 * Time: 20:42
 */

include_once('../model/function.php');

$article_up = article_search($_GET['id']);

if (isset($_GET['submit'])) {
    article_up_up($_GET['id'], $_GET['art_name'], $_GET['art_text']);
    die(header('Location: ../index.php'));}
?>



<html>
<head>
  <meta charset="UTF-8">
</head>

<body>
<header></header>
<section>
  <fieldset>
    <?php foreach ($article_up as $up):
    for ($i = 0 ; $i < count($up); $i++): ?>
    <form method="GET" name="art_up">
     id статьи: <input type="text" name="art_id" value="<?php echo $up["$i"]['id']?>" disabled>
      Название статьи: <input type="text" name="art_name" value="<?php echo $up["$i"]['article_name']?>">
      Дата: <input type="date" name="art_date"><br>
      Статья: <textarea name="art_text" rows="5" ><?php echo $up["$i"]['article_text']?></textarea><br>
      <input type="submit" name="submit" value="Сохранить">
    </form>
    <?php endfor?>
    <?php endforeach?>
  </fieldset>


</section>
<footer>
  <a href="../index.php">К списку статей</a>
</footer>

</body>

</html>