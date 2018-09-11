<!DOCTYPE html>
<html>
    <head>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
<title>Запросы</title>
<header><a href="task2.php">&larr;</a>Задание номер три<a href="task4.php">&rarr;</a></header>
</head>
  <body>
    <div class="maincontent">
        <form action="task3.php" method="post">
        <div class="block1">
        Периметр треугольника,</br>Медианы треугольника:
        <p>x1: <input type="number" placeholder="x1" name="x1" <?php echo "value=\"".$_POST['x1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="y1" <?php echo "value=\"".$_POST['y1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="x2" <?php echo "value=\"".$_POST['x2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="y2" <?php echo "value=\"".$_POST['y2']."\"";?></input></p>
        <p>x3: <input type="number" placeholder="x3" name="x3" <?php echo "value=\"".$_POST['x3']."\"";?></input>
        y3: <input type="number" placeholder="y3" name="y3" <?php echo "value=\"".$_POST['y3']."\"";?></input></p>
        <p><input type="submit" value="Периметр" /></p>
            <?php
            $x1 = (double)$_POST['x1'];
            $x2 = (double)$_POST['x2'];
            $x3 = (double)$_POST['x3'];
            $y1 = (double)$_POST['y1'];
            $y2 = (double)$_POST['y2'];
            $y3 = (double)$_POST['y3'];
            $a1 = sqrt(($x1-$x2)*($x1-$x2) + ($y1-$y2)*($y1-$y2));
            $b1 = sqrt(($x1-$x3)*($x1-$x3) + ($y1-$y3)*($y1-$y3));
            $c1 = sqrt(($x3-$x2)*($x3-$x2) + ($y3-$y2)*($y3-$y2));
            $p1 = $a1 + $b1 + $c1;
            $m1 = sqrt((($x1-$x2)/2-$x3)*(($x1-$x2)/2-$x3) + (($y1-$y2)/2-$y3)*(($y1-$y2)/2-$y3));
            $m2 = sqrt((($x3-$x2)/2-$x1)*(($x3-$x2)/2-$x1) + (($y3-$y2)/2-$y1)*(($y3-$y2)/2-$y1));
            $m3 = sqrt((($x1-$x3)/2-$x2)*(($x1-$x3)/2-$x2) + (($y1-$y3)/2-$y2)*(($y1-$y3)/2-$y2));
            ?>
            <?php 
            if ($p1){
                echo "Периметр = ".round($p1,3)."</br>";
            }
            if ($m1){
                echo "Медиана A = ".round($m1,3)."</br>";
            }
            if ($m2){
                echo "Медиана B = ".round($m2,3)."</br>";
            }
            if ($m3){
                echo "Медиана C = ".round($m3,3)."</br>";
            }
            ?>
        </div>

        <div class="block1">
        Площадь треугольника,</br>Существование треугольника:
        <p>Сторона A: <input type="number" placeholder="a" name="a" <?php echo "value=\"".$_POST['a']."\"";?></input></p>
        <p>Сторона B: <input type="number" placeholder="b" name="b" <?php echo "value=\"".$_POST['b']."\"";?></input></p>
        <p>Сторона C: <input type="number" placeholder="c" name="c" <?php echo "value=\"".$_POST['c']."\"";?></input></p>
        <p><input type="submit" value="Площадь" /></p>
            <?php
            $a = (double)$_POST['a'];
            $b = (double)$_POST['b'];
            $c = (double)$_POST['c'];
            $p2 = $a + $b + $c;
            $p2 = $p2/2;
            $s = sqrt($p2 * ($p2 - $a) * ($p2 - $b) * ($p2 - $c));
            ?>
            <?php 
            if ($a >= $b+$c || $b >= $a+$c || $c >= $a+$b){
                if ($s) echo "Нельзя построить.";
            }
            else if ($s){
                echo "Площадь = ".round($s,3)."</br>";
                echo "Можно построить.";
            }
            ?>
        </div>

        <div class="block1">
            Координаты 1-й диагонали:</br>
        <p>x1: <input type="number" placeholder="x1" name="dx1" <?php echo "value=\"".$_POST['dx1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="dy1" <?php echo "value=\"".$_POST['dy1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="dx2" <?php echo "value=\"".$_POST['dx2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="dy2" <?php echo "value=\"".$_POST['dy2']."\"";?></input></p>
            Координаты 2-й диагонали:</br>
        <p>x3: <input type="number" placeholder="x3" name="dx3" <?php echo "value=\"".$_POST['dx3']."\"";?></input>
        y3: <input type="number" placeholder="y3" name="dy3" <?php echo "value=\"".$_POST['dy3']."\"";?></input></p>
        <p>x4: <input type="number" placeholder="x4" name="dx4" <?php echo "value=\"".$_POST['dx4']."\"";?></input>
        y4: <input type="number" placeholder="y4" name="dy4" <?php echo "value=\"".$_POST['dy4']."\"";?></input></p>
        <p><input type="submit" value="Посчитать" /></p>
            <?php
            $dx1 = (double)$_POST['dx1'];
            $dy1 = (double)$_POST['dy1'];
            $dx2 = (double)$_POST['dx2'];
            $dy2 = (double)$_POST['dy2'];
            $dx3 = (double)$_POST['dx3'];
            $dy3 = (double)$_POST['dy3'];
            $dx4 = (double)$_POST['dx4'];
            $dy4 = (double)$_POST['dy4'];
            $d1 = sqrt(($dx1-$dx2)*($dx1-$dx2) + ($dy1-$dy2)*($dy1-$dy2));
            $d2 = sqrt(($dx3-$dx4)*($dx3-$dx4) + ($dy3-$dy4)*($dy3-$dy4));
            $da = sqrt(($dx1-$dx4)*($dx1-$dx4) + ($dy1-$dy4)*($dy1-$dy4));
            $db = sqrt(($dx1-$dx3)*($dx1-$dx3) + ($dy1-$dy3)*($dy1-$dy3));
            $dp = ($da + $db) * 2;
            $ds = $da * $db;
            ?>
            <?php 
            if ($dp){
                echo "Периметр = ".round($dp,3)."</br>";
            }
            if ($ds){
                echo "Площадь = ".round($ds,3)."</br>";
            }
            ?>
        </div>
        <div class="block1">
            Координаты четырёхугольника:</br>
        <p>x1: <input type="number" placeholder="x1" name="cx1" <?php echo "value=\"".$_POST['cx1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="cy1" <?php echo "value=\"".$_POST['cy1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="cx2" <?php echo "value=\"".$_POST['cx2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="cy2" <?php echo "value=\"".$_POST['cy2']."\"";?></input></p>
        <p>x3: <input type="number" placeholder="x3" name="cx3" <?php echo "value=\"".$_POST['cx3']."\"";?></input>
        y3: <input type="number" placeholder="y3" name="cy3" <?php echo "value=\"".$_POST['cy3']."\"";?></input></p>
        <p>x4: <input type="number" placeholder="x4" name="cx4" <?php echo "value=\"".$_POST['cx4']."\"";?></input>
        y4: <input type="number" placeholder="y4" name="cy4" <?php echo "value=\"".$_POST['cy4']."\"";?></input></p>
        <p><input type="submit" value="Посчитать" /></p>
            <?php
            $cx1 = (double)$_POST['cx1'];
            $cy1 = (double)$_POST['cy1'];
            $cx2 = (double)$_POST['cx2'];
            $cy2 = (double)$_POST['cy2'];
            $cx3 = (double)$_POST['cx3'];
            $cy3 = (double)$_POST['cy3'];
            $cx4 = (double)$_POST['cx4'];
            $cy4 = (double)$_POST['cy4'];
            $ca = sqrt(($cx1-$cx2)*($cx1-$cx2) + ($cy1-$cy2)*($cy1-$cy2));
            $cb = sqrt(($cx3-$cx2)*($cx3-$cx2) + ($cy3-$cy2)*($cy3-$cy2));
            $cc = sqrt(($cx4-$cx3)*($cx4-$cx3) + ($cy4-$cy3)*($cy4-$cy3));
            $cd = sqrt(($cx4-$cx1)*($cx4-$cx1) + ($cy4-$cy1)*($cy4-$cy1));
            $cp = ($ca + $cb + $cc + $cd)/2;
            $cs = sqrt(($cp - $ca) * ($cp - $cb) * ($cp - $cc) * ($cp - $cd));
            ?>
            <?php 
            if ($cp){
                echo "Периметр = ".round($cp*2,3)."</br>";
            }
            if ($cs){
                echo "Площадь = ".round($cs,3)."</br>";
            }
            ?>
        </div>
        <div class="block1">
        Диагональ:
        <p>x1: <input type="number" placeholder="x1" name="ox1" <?php echo "value=\"".$_POST['ox1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="oy1" <?php echo "value=\"".$_POST['oy1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="ox2" <?php echo "value=\"".$_POST['ox2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="oy2" <?php echo "value=\"".$_POST['oy2']."\"";?></input></p>
        Точка:
        <p>x: <input type="number" placeholder="x" name="ox3" <?php echo "value=\"".$_POST['ox3']."\"";?></input>
        y: <input type="number" placeholder="y" name="oy3" <?php echo "value=\"".$_POST['oy3']."\"";?></input></p>
        <p><input type="submit" value="Посчитать" /></p>
            <?php
            $ox1 = (double)$_POST['ox1'];
            $oy1 = (double)$_POST['oy1'];
            $ox2 = (double)$_POST['ox2'];
            $oy2 = (double)$_POST['oy2'];
            $ox3 = (double)$_POST['ox3'];
            $oy3 = (double)$_POST['oy3'];
            $ox4 = ($ox1 + $ox2)/2;
            $oy4 = ($oy1 + $oy2)/2;
            $od = sqrt(($ox1-$ox2)*($ox1-$ox2) + ($oy1-$oy2)*($oy1-$oy2));
            $or = sqrt($od*$od/2)/2;
            $oro = sqrt(($ox4-$ox3)*($ox4-$ox3) + ($oy4-$oy3)*($oy4-$oy3));
            ?>
            <?php 
            if ($oro){
                if ($or < $oro) echo "Не входит.";
                else echo "Входит.";
            }
            ?>
        </div>
        <div class="block1">
        Диагональ 1:
        <p>x1: <input type="number" placeholder="x1" name="kx1" <?php echo "value=\"".$_POST['kx1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="ky1" <?php echo "value=\"".$_POST['ky1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="kx2" <?php echo "value=\"".$_POST['kx2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="ky2" <?php echo "value=\"".$_POST['ky2']."\"";?></input></p>
        Диагональ 2:
        <p>x3: <input type="number" placeholder="x3" name="kx3" <?php echo "value=\"".$_POST['kx3']."\"";?></input>
        y3: <input type="number" placeholder="y3" name="ky3" <?php echo "value=\"".$_POST['ky3']."\"";?></input></p>
        <p>x4: <input type="number" placeholder="x4" name="kx4" <?php echo "value=\"".$_POST['kx4']."\"";?></input>
        y4: <input type="number" placeholder="y4" name="ky4" <?php echo "value=\"".$_POST['ky4']."\"";?></input></p>
        <p><input type="submit" value="Посчитать" /></p>
            <?php
            $kx1 = (double)$_POST['kx1'];
            $ky1 = (double)$_POST['ky1'];
            $kx2 = (double)$_POST['kx2'];
            $ky2 = (double)$_POST['ky2'];
            $kx3 = (double)$_POST['kx3'];
            $ky3 = (double)$_POST['ky3'];
            $kx4 = (double)$_POST['kx4'];
            $ky4 = (double)$_POST['ky4'];
            $kcx1 = ($kx1 + $kx2)/2;
            $kcy1 = ($ky1 + $ky2)/2;
            $kcx2 = ($kx3 + $kx4)/2;
            $kcy2 = ($ky3 + $ky4)/2;
            $kd1 = sqrt(($kx1-$kx2)*($kx1-$kx2) + ($ky1-$ky2)*($ky1-$ky2));
            $kr1 = sqrt($kd1*$kd1/2)/2;
            $kd2 = sqrt(($kx3-$kx4)*($kx3-$kx4) + ($ky3-$ky4)*($ky3-$ky4));
            $kr2 = sqrt($kd1*$kd1/2)/2;
            $kro = sqrt(($kcx1-$kcx2)*($kcx1-$kcx2) + ($kcy1-$kcy2)*($kcy1-$kcy2));
            ?>
            <?php 
            if ($oro){
                if ($kr1 + $kr2 < $kro) echo "Не пересекаются.";
                else echo "Пересекаются.";
            }
            ?>
        </div>
        <div class="block1">
        Отрезок 1:
        <p>x1: <input type="number" placeholder="x1" name="px1" <?php echo "value=\"".$_POST['px1']."\"";?></input>
        y1: <input type="number" placeholder="y1" name="py1" <?php echo "value=\"".$_POST['py1']."\"";?></input></p>
        <p>x2: <input type="number" placeholder="x2" name="px2" <?php echo "value=\"".$_POST['px2']."\"";?></input>
        y2: <input type="number" placeholder="y2" name="py2" <?php echo "value=\"".$_POST['py2']."\"";?></input></p>
        Отрезок 2:
        <p>x3: <input type="number" placeholder="x3" name="px3" <?php echo "value=\"".$_POST['px3']."\"";?></input>
        y3: <input type="number" placeholder="y3" name="py3" <?php echo "value=\"".$_POST['py3']."\"";?></input></p>
        <p>x4: <input type="number" placeholder="x4" name="px4" <?php echo "value=\"".$_POST['px4']."\"";?></input>
        y4: <input type="number" placeholder="y4" name="py4" <?php echo "value=\"".$_POST['py4']."\"";?></input></p>
        <p><input type="submit" value="Посчитать" /></p>
            <?php
            $px1 = (double)$_POST['px1'];
            $py1 = (double)$_POST['py1'];
            $px2 = (double)$_POST['px2'];
            $py2 = (double)$_POST['py2'];
            $px3 = (double)$_POST['px3'];
            $py3 = (double)$_POST['py3'];
            $px4 = (double)$_POST['px4'];
            $py4 = (double)$_POST['py4'];
            function area($x1, $y1, $x2, $y2, $x3, $y3){
                return ($x2 - $x1) * ($y3 - $y1) - ($y2 - $y1) * ($x3 - $x1);
            }
            function swap(&$x,&$y) {
                $tmp=$x;
                $x=$y;
                $y=$tmp;
            }
            function inter($a, $b, $c, $d) {
                if ($a > $b)  swap($a, $b);
                if ($c > $d)  swap($c, $d);
                return max($a,$c) <= min($b,$d);
            }
            if (inter($px1, $px2, $px3, $px4) 
            && inter($py1, $py2, $py3, $py4) 
            && area($px1, $py1, $px2, $py2, $px3, $py3) * area($px1, $py1, $px2, $py2, $px4, $py4) <= 0 
            && area($px3, $py3, $px4, $py4, $px1, $py1) * area($px3, $py3, $px4, $py4, $px2, $py2) <= 0) {
                echo "Пересекаются.";
            }
            else echo "Не пересекаются.";
            ?>
        </div>
        </form>
    </div>
  </body>
</html>
