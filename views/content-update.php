
  <fieldset>
    <?php foreach ($article_update as $up):
    for ($i = 0 ; $i < count($up); $i++): ?>
    <form method="GET" name="art_up">
      <input type="hidden" name="art_id" value="<?php echo $up["$i"]['id']?>">
      Название статьи: <input type="text" name="art_name" value="<?php echo $up["$i"]['article_name']?>">
      Дата: <input type="date" name="art_date" value="<?php echo $up["$i"]['article_date']?>"><br>
      Статья: <textarea name="art_text" rows="5" ><?php echo $up["$i"]['article_text']?></textarea><br>
      <input type="submit" name="submit" value="Сохранить">
    </form>
    <?php  endfor?>
    <?php endforeach?>
  </fieldset>
  <a href="../PHP-2_ht_1.git/index.php">К списку статей</a>