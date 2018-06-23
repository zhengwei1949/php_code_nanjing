<?php
header('content-type:text/html;charset=utf8');
$arr = [2,3,4];
array_splice($arr,1);
print_r($arr);
?>