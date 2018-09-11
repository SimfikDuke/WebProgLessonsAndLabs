<!DOCTYPE html>
<html>
    <head>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
<title>Базы данных</title>
<header><a href="task6.php">&larr;</a>Задание номер семь</header>
</head>
  <body>
    <div class="maincontent">
    <?php
        $link = mysqli_connect("localhost", "root", "duke1duke", "libbook");
        $result = mysqli_query($link, "SELECT * FROM libraries");
        $arr = $result->fetch_array(MYSQLI_BOTH);
        while($info = $result->fetch_array(MYSQLI_BOTH)) { 
            echo $info['city']; 
            }
        mysqli_close($link);
    ?>
    </div>
  </body>
</html>
