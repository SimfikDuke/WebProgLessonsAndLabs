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