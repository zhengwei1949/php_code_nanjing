<!--循环-->
<?php
$arr = [2,3,4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php for($i=0;$i<count($arr);$i++){?>
        <?php echo $arr[$i];?>
    <?php } ?>
</body>
</html>