<?php
header('content-type:text/html;charset=utf8');
echo date('Y-m-d H:i:s');
echo '<hr>';
echo date('Y年m月d日H时i分s秒');
echo '<hr>';
echo time();
echo '<hr>';
$today = time();
$tomorrow = strtotime('+1 day');
var_dump(24 * 60 * 60 == $tomorrow - $today);
?>