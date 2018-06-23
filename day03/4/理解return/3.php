<?php
header('content-type:text/html;charset=utf8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!isset($_POST['username']) || trim($_POST['username']) == ""){
        echo '用户名写入错误';
        return;
    }else{
        echo '用户名为'.$_POST['username'];
    }
}
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username">
        <input type="submit" value="提交">
    </form>
</body>
</html>