<?php
header('content-type:text/html;charset=utf8');
function fn(){
    if(!isset($_POST['username']) || trim($_POST['username']) == ""){
        echo '用户名写入错误';
        return;
    }
    $username = trim($_POST['username']);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    fn();
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
    <h3>你提交的用户名是<?php echo $username; ?></h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username">
        <input type="submit" value="提交">
    </form>
</body>
</html>