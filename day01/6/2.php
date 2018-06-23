<?php 
header('content-type:text/html;charset=utf8');
$arr = ['苹果','桔子','香蕉'];
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo "<br>";
}
?>