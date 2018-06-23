<?php 
$a = 100;
function fn(){
    echo $GLOBALS['a'];
    $GLOBALS['a'] = 200;
}
fn();
echo $a;
?>