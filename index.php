<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
<META Name="Simfik.ru" lang="ru" content="таблица, умножение, таблица умножения">
<title>таблица умножения</title>
<header>Задание номер один<a href="task2.php">&rarr;</a></header>
</head>
  <body>
      <div class="maincontent">
    <table border="1">
  <?php 
for ($x = 1; $x <= 10; $x++) {
  echo "<td>";
  for ($y = 1; $y <= 10; $y++) {
    $z = $x * $y;
    echo "$x * $y = $z<br>";
  }
  echo "</td>";
  if ($x == 5) {
    echo "<tr>";
  }
} 
?>
    </table>
    </div>
  </body>
</html>
