<?php 
//使用global
$a = 100;
function fn(){
    global $a;
    echo $a;
    $a = 200;
}
fn();
echo $a;
?>