<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title><?php echo $title ?></title>
</head>
<body>
<header>
  <h1><?php echo $title ?></h1>
</header>
<section>
  <?php include $content ?>
</section>
<footer>
  <a href="../HT/views/add.php">Добавить статью</a>
</footer>
</body>
</html>