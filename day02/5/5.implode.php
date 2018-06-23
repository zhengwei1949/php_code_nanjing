<?php 
header('content-type:text/html;charset=utf8');
$arr = [
    [1,"苹果","apple.jpg"],
    [2,"桔子","orange.jpg"],
    [3,"香蕉","banana.jpg"]
];
foreach($arr as $value){
    $arr1[] = implode("|",$value);
}
echo implode("\n",$arr1);
?>
