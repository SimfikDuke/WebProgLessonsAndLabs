<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
<META Name="Simfik.ru" lang="ru" content="таблица, умножение, таблица умножения">
<title>Работа с файлами</title>
<header><a href="task3.php">&larr;</a>Задание номер четыре<a href="task5.php">&rarr;</a></header>
</head>
  <body>
      <div class="maincontent">
        <div class="block1">
        <form action="task4.php" method="post">
        Добавить страну</br>
        <p>Название: <input type="text" placeholder="Введите название" name="country" <?php echo "value=\"".$_POST['country']."\"";?>/></p>
        <p>Столица:  <input type="text" placeholder="Столица страны" name="capital" <?php echo "value=\"".$_POST['capital']."\"";?>/></p>
        <p>Площадь: <input type="text" placeholder="Площадь страны" name="area" <?php echo "value=\"".$_POST['area']."\"";?>/></p>
        <p><input type="submit" value="Добавить" /></p>
<?php 
    $country = $_POST['country'];
    $capital = $_POST['capital'];
    $area = $_POST['area'];
    $fname = "files/{$country}";
    if($country) {
        if (file_exists($fname)){
            echo "Эта страна уже добавлена";
        }
        else {
            $file = fopen($fname,"w");
            chmod($fname, 0777);
            fputs($file, $country."\n");
            fputs($file, $capital."\n");
            fputs($file, $area."\n");
            fclose($file);
            if (file_exists($fname)){
                echo "Страна добавлена.";
            }
        }
    }
?>  
            </form>
        </div>
        <div class="block1">
        <form action="task4.php" method="post">
        Редактировать запись</br>
<?php 
if ($_POST['scountry']) $go = True;
$scountry = $_POST['scountry'];
    $ncountry = $_POST['ecountry'];
    $ncapital = $_POST['ecapital'];
    $narea = $_POST['earea'];
if ($scountry) $go = False;
if (!$go){
    echo "<p>Выберите из списка:";
    echo "<select name=\"scountry\">";
    if ($_POST['scountry'])
    {
        $tc = $_POST['scountry'];
       echo "<option selected value=\"$tc\">$tc";
    } 
    $folderName = "files";
    $dir = opendir($folderName); 
    while (($file = readdir($dir)) !== false){ 
        if($file != "." && $file != ".."){
            if(is_file($folderName."/".$file)){
               if ($file != $tc) echo "<option value=\"$file\">$file";
            } 
        } 
    }
    closedir($dir);
    echo "</select></p>";
    echo "<p><input type=\"submit\" value=\"Редактировать\" /></p>";
}
?>  
    
    <?php

    if ($scountry){
        $fname = "files/{$scountry}";
        $efile = fopen($fname,"r+");
        $ecountry = fgets($efile);
        $ecapital = fgets($efile);
        $earea = fgets($efile);
        fclose($efile);
    $fname = "files/$ncountry";
        echo "<form action=\"task4.php\" method=\"post\">";
        if (!$ncountry){
        echo "<p>Название: <input type=\"text\" placeholder=\"Введите название\" name=\"ecountry\" value=\"".$ecountry."\" ></input></p>";
        echo "<p>Столица: <input type=\"text\" placeholder=\"Столица страны\" name=\"ecapital\" value=\"".$ecapital."\"></input></p>";
        echo "<p>Площадь: <input type=\"text\" placeholder=\"Площадь страны\" name=\"earea\" value=\"".$earea."\"></input></p>";
        echo "<p><input type=\"submit\" value=\"Подтвердить\" /></p>";
        }

        if ($ncountry){
        chmod($fname, 0777);
        $file = fopen($fname,"w+");
        fputs($file, $ncountry."\n");
        fputs($file, $ncapital."\n");
        fputs($file, $narea."\n");
        fclose($file);
        echo "Запись была изменена";
        unset($ncountry);
        unset($ncapital);
        unset($narea);
        unset($ecountry);
        unset($ecapital);
        unset($earea);
        unset($scountry);
        }
        echo "</form>";
    }
    ?>
            </form>
        </div>
    </div>
  </body>
</html>
