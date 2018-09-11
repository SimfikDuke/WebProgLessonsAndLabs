<?php
include("simple_html_dom.php");
if($_GET['tag']) $tag=$_GET['tag']; else $tag = 'strong';
$regex = '/(?<=<'.$tag.'>).*(?=<\/'.$tag.'>)/U';
$html = file_get_html('http://grafika.me/node/37');
preg_match_all($regex, $html, $result, PREG_PATTERN_ORDER);

foreach ($result[0] as $key => $value){
    if($value) echo '<div class="block0">'.$value."</br></div>";
}

?>