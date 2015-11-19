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
<a href="../PHP-2_ht_1.git/index.php">К списку статей</a>
