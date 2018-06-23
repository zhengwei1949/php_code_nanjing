<?php 
$data = [
    ["id" => 1, "name" => "香蕉", "src" => "img/banana1.jpg"],
    ["id" => 2, "name" => "苹果", "src" => "img/apple1.jpg"],
    ["id" => 3, "name" => "橙⼦", "src" => "img/orange1.jpg"],
    ["id" => 4, "name" => "菠萝", "src" => "img/pineapple1.jpg"]
];
foreach($data as $key=>$value){
    echo '<hr>';
    echo $value['name'];
    echo "<br>";
    echo $value['src'];
    echo '<hr>';
}
?>