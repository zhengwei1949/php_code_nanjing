<?php 
header('content-type:text/html;charset=utf8');
$str = file_get_contents('./fruit.txt');
echo $str;
?>