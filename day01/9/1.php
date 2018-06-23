<?php 
$arr = ["a"=>"itcast"];
if(isset($arr['a'])){
    echo $arr['a'];
}else{
    echo '$arr["a"]不存在';
}
?>