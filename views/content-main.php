  <table>
    <tbody>
    <tr>
      <td>Номер</td>
      <td>Название статьи</td>
      <td>Дата создания</td>
      <td>Текст статьи</td>
      <td>Редактировать</td>
      <td>Удалить</td>
    </tr>
    <?php foreach ($articles as $article):
      for ($i = 0 ; $i < count($article); $i++):?>
        <tr>
          <td><?php echo $article["$i"]['id']?></td>
          <td><?php echo $article["$i"]['article_name']?></a></td>
          <td><?php echo $article["$i"]['article_date']?></td>
          <td><a href="../PHP-2_ht_1.git/views/article.php?id=<?php echo $article["$i"]['id']?>">Статья</a></td>
          <td><a href="../PHP-2_ht_1.git/views/update.php?id=<?php echo $article["$i"]['id']?>">Редактировать</a></td>
          <td><a href="../PHP-2_ht_1.git/views/delete.php?id=<?php echo $article["$i"]['id']?>">Удалить</a></td>
        </tr>
      <?php endfor; ?>
    <?php endforeach;?>
    </tbody>
  </table>
