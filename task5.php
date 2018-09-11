<!DOCTYPE html>
<html>
    <head>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
<title>Графика</title>
<header><a href="task4.php">&larr;</a>Задание номер пять<a href="task6.php">&rarr;</a></header>
</head>
  <body>
      <div class="maincontent"> 
      <div class="block1"> 
<?php
    if ($_GET['p']) $p = 0;
    else $p = 1;
echo "<a href=\"task5.php?p=$p\"><img src=\"image.php?p=$p\"></a>"
?>
    </div>
    </div>
  </body>
</html>
