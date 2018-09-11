<!DOCTYPE html>
<html>
    <head>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
<title>Регулярные выражения</title>
<header><a href="task5.php">&larr;</a>Задание номер шесть<a href="task7.php">&rarr;</a></header>
</head>
  <body>
    <div class="maincontent">
    <div class='block1'>
    <?php if($_GET['tag']) $tag=$_GET['tag']; else $tag = 'strong';?>
    Ниже представлены все совпадения</br>
    внутри тега &lt;<?php echo $tag;?>&gt; со страницы</br>
     http://grafika.me/node/37</br></br>
    <?php include("regex.php");?></br>
    </br>
    Вы можете изменить тег:</br>
    <form action="task6.php" method="get">
    <input type="text" placeholder="Ваш тег" name="tag" <?php echo "value=\"".$_GET['tag']."\"";?></input></br>
    <input type="submit" value="Изменить тег" />    
    </form>
    </div>
    </div>
  </body>
</html>
