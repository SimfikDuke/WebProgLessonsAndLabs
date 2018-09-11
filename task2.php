<!DOCTYPE html>
<html>
    <head>
        <title>Продукты</title>
        <META Name="Simfik.ru" lang="ru" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <div id="wrap">
        <header>
        <a href="task1.php">&larr;</a>Задание номер два<a href="task3.php">&rarr;</a>
        </header>
    </div>
    <body>
        <div class="maincontent">
    <?php
        // ассоциативный массив продуктов и их цен
        $food["Apple"] = 30;
        $food["Banana"] = 130;
        $food["Cherry"] = 30;
        $food["Coconut"] = 130;
        $food["Kiwi"]= 230;
        $food["Pineapple"] = 90;
        $food["Lime"] = 90;
        $food["Lemon"] = 50;
        $food["Mango"] = 130;
        $food["Olive"] = 90;
        $food["Peach"] = 50;
        $food["Avocado"] = 230;
        $food["Cucumber"] = 30;
        $food["Carrot"] = 10;
        $food["Tomato"] = 10;
        $food["Cabbage"] = 20;
        $food["Potatoes"] = 40;
        $food["Pepper"] = 50;
        $food["Turnip"] = 20;
        $food["Haricot"] = 10;
    ?>
    <div class="block1">
    <?php
        echo "<h3>1) Список продуктов:</h3>";
        foreach ( $food as $key => $value) {
        echo "Продукт ".$key." стоит ".$value." рублей<br/>";
        }
    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>2) Пять самых дешевых продуктов:</h3>";
        $asorted = $food;
        asort($asorted);
        $i=1;
        foreach ( $asorted as $key => $value) {
            if ($i < 6) {
                echo $i.") Продукт ".$key." стоит ".$value." рублей<br/>";
                $i += 1;
            }
            else break;
        }
    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>3) Пять самых дорогих продуктов:</h3>";
        $i=1;
        $arsorted = $food;
        arsort($arsorted);
        foreach ( $arsorted as $key => $value) {
            if ($i < 6) {
                echo $i.") Продукт ".$key." стоит ".$value." рублей<br/>";
                $i += 1;
            }
            else break;
        }
    ?>
    </div>
    <div class="block1">
    <?php

        echo "<h3>4) Продукты с одинаковой ценой:</h3>";
        $temp = 0;
        foreach ( $asorted as $key => $value) {
            if ( $temp != $value ) {
                $i = 0;
                $temp = $value;
                foreach ( $arsorted as $key2 => $value2){
                    if ( $value2 == $temp){
                        $sameprice[$i] = $key2;
                        $i += 1;
                    }
                }
                if (count($sameprice) > 1) {
                echo "Продукты ";
                for ( $i=0; $i < count($sameprice); $i++) {
                    echo $sameprice[$i];
                    if($i < count($sameprice)-1) echo ", ";
                }
                echo " стоят ".$temp." руб.</br>";
                }
                unset($sameprice);
            }
        }
    ?>
    </div>
    <div class="block1">
    <?php

        echo "<h3>5) Наименьшая разность цен:</h3>";
        $infPriceDif = PHP_INT_MAX;
        foreach ( $asorted as $key => $value) {
            foreach ( $arsorted as $key2 => $value2){
                if ( abs($value - $value2) < $infPriceDif && abs($value - $value2) > 0){
                    $infPriceDif = abs($value - $value2);
                    $pos1 = $key;
                    $pos2 = $key2;
                }   
            }
        }
        if ( $infPriceDif != PHP_INT_MAX){
            echo "Минимальная разница цен продуктов</br>наблюдается у ".$pos1." и ".$pos2." и равна ".$infPriceDif." руб.";
        }
        
    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>6) Обмен цен у самого дорогого и самого дешевого продукта:</h3>";
        $minPrice = min($food);
        $maxPrice = max($food);
        foreach ($asorted as $key => $value){
            $food[$key] = $maxPrice;
            echo "Теперь ".$key." стоит ".$maxPrice." руб.</br>";
            break;
        }
        foreach ($arsorted as $key => $value){
            $food[$key] = $minPrice;
            echo "Теперь ".$key." стоит ".$minPrice." руб.</br>";
            break;
        }
        unset($asorted);
        unset($arorted);
        $asorted = $food;
        $arsorted = $food;
        asort($asorted);
        arsort($arsorted);

    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>7) Продукты, совпадающие по цене:</h3>";
        $temp = 0;
        $maxSamePrice = 0;
        $maxAmount = 0;
        $j = 0;
        foreach ( $asorted as $key => $value) {
            if ( $temp != $value ) {
                $i = 0;
                $temp = $value;
                foreach ( $arsorted as $key2 => $value2){
                    if ( $value2 == $temp){
                        $sameprice[$i] = $key2;
                        $i += 1;
                    }
                }
                if (count($sameprice) > 1 && count($sameprice) > $maxAmount) {
                $maxSame = $sameprice;
                $maxSamePrice = $temp;
                $maxAmount = count($sameprice);
                }
                else if ( count($sameprice) == 1){
                    $notSame[$j] = $sameprice[0];
                    $j += 1;
                }
                unset($sameprice);
            }
        }
        if ($maxAmount > 0) {
            echo "Найбольшее количество одинаковых цен у ";
                for ( $i=0; $i < count($maxSame); $i++) {
                    echo $maxSame[$i];
                    if($i < count($maxSame)-1) echo ", ";
                }
                echo " они стоят ".$maxSamePrice." руб.</br>";
        }
        else echo "Продуктов с одинаковыми ценами не найдено.";
    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>8) Продукты с индивидуальным ценами:</h3>";
        if (count($notSame) > 0) {
        echo "Не совпадающие ни с чем цены имеют</br>продукты: ";
            for ( $i = 0; $i < count($notSame); $i++) {
                echo $notSame[$i];
                if($i < count($notSame)-1) echo ", ";
                else echo ".";
            }
        }
        else echo "Продуктов с индивидуальной ценой не найдено.";
    ?>
    </div>
    <div class="block1">
    <?php
        echo "<h3>9) Продукт с ценой, близкой к средней:</h3>";
        $meanPrice = 0;
        $minDif = PHP_INT_MAX;
        $i = 0;
        foreach ( $food as $key => $value ) {
            $meanPrice += $value;
            $i += 1;
        }
        $meanPrice /= $i;
        foreach ( $food as $key => $value ){
            if (abs($meanPrice - $value) < $minDif){
                $minDif = abs($meanPrice - $value);
                $minDifProduct = $key;
            }
        }
        echo "К средней цене ближе ".$minDifProduct.", стоимостью в ".$food[$minDifProduct]." руб.";
    ?>
    </div>
    </div>
    </body>
</html>
