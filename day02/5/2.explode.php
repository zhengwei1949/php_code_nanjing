<?php
header('content-type:text/html;charset=utf8');
$str = "1|苹果|apple.jpg";
$arr = explode("|",$str);
print_r($arr);
?>