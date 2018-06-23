<?php
header('content-type:text/html;charset=utf8');
$str = "1|苹果|apple.jpg\n2|桔子|orange.jpg\n3|香蕉|banana.jpg";
$arr = explode("\n",$str);//注意，一定要是双引号
foreach($arr as $value){
    $result[] = explode("|",$value);
}
print_r($result);
?>