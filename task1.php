<!DOCTYPE html>
<html>
    <head>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
<title>таблица умножения</title>
<header>Задание номер один<a href="task2.php">&rarr;</a></header>
</head>
  <body>
      <div class="maincontent">
    <table border="1">
  <?php 
for ($x = 1; $x <= 10; $x++) {
  echo "<div class=\"block0\">";
  for ($y = 1; $y <= 10; $y++) {
    $z = $x * $y;
    echo "$x * $y = $z<br>";
  }
  echo "</div>";    
} 
?>
    </table>
    </div>
  </body>
</html>
