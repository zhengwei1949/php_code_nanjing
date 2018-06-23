<?php
//如果在一个函数中调用 return 语句，将立即结束此函数的执行并将它的参数作为函数的值返回
function fn($a,$b){
    if($a == 100){
        return;
    }
    return $a + $b;
}

fn(2,3);
?>