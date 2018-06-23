<?php
//混合数组
$arr = [2,"name"=>"jack",3,4,"age"=>20];
print_r($arr);
echo '<hr>';
foreach($arr as $key => $value){
    echo '键是'.$key.'  值是'.$value;
    echo "<br>";
}
?>