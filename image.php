<?php

header("Content-type: image/png");
$string = $_GET['text'];
if ($_GET['width'] && $_GET['height']) {
    $width = $_GET['width'];
    $height = $_GET['height'];
}
else {
    $width = 640;
    $height = 480;
}
$im = imagecreate($width, $height);
$background_color = imagecolorallocate($im, 229, 227, 180);
$text_color = imagecolorallocate($im, 233, 14, 31);
$body_color = imagecolorallocate($im, 139, 69, 19);
$black = imagecolorallocate($im, 0, 0, 0);
//x=315     y=170
$body_points = array(
    297,  170,
    327,  170,
    350,  250, // 
    340, 250,  //
    326,  196,
    325,  280,
    323, 360,  
    315,  359,
    315,  282,
    311,  283,
    308, 358,
    300, 360,
    300, 245,  
    298, 244,
    297, 200,
    270, 240,//
    263, 235,//
    );
    if ($_GET['p']) {
        $body_points[4] = 350;
        $body_points[5] = 130;
        $body_points[6] = 360;
        $body_points[7] = 130;
        $body_points[30] = 263;
        $body_points[31] = 130;
        $body_points[32] = 270;
        $body_points[33] = 130;

    }

    
imagestring($im, 20, 180, 15,  "Task number 5: \"Graphics in PHP\"", $text_color);
imagestring($im, 20, 250, 45,  "There's a man:", $text_color);
if ($_GET['p']) imagestring($im, 5, 200, 400 , "EAH!!! EAH!!! Oh,EAH!!!", $text_color);
imagefilledellipse($im, 312, 149, 30, 40, $body_color);
imagefilledellipse($im, 307, 143, 6, 5, $black);
imagefilledellipse($im, 317, 143, 6, 5, $black);
imagefilledpolygon($im, $body_points, count($body_points)/2, $body_color);

imagepng($im);
imagedestroy($im);

?>