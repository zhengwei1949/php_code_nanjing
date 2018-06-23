<?php 
function addSong(){
    if(!isset($_POST['title']) || trim($_POST['title']) === ""){
        $errorArr[] = "title";
    }
    if (!isset($_POST['geshou']) || trim($_POST['geshou']) === "") {
        $errorArr[] = "geshou";
    }
    if (!isset($_POST['zhuanji']) || trim($_POST['zhuanji']) === "") {
        $errorArr[] = "zhuanji";
    }
    if (!isset($_FILES['source']) || $_FILES['source']['error'] != 0) {
        $errorArr[] = "source";
    }
    //处理用户的错误信息
    if (isset($errorArr)) {
        $GLOBALS["err_arr"] = $errorArr;
        return;
    }
}
//判断用户是否提交post请求
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    addSong();
}else{
    $GLOBALS['err_arr'] = [];
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .showInfo {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class=" display-3 py-3">音乐上传</h1>
        <hr>
        <!-- 表单结构： -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">标题</label>
                <!-- 下面的所有 is-invalid 均为要判断的类名 -->
                <input type="text" class="form-control" id="title" name="title">
                <!-- in_array("title",$errorArr):判断当前$errorArr有没有title这个值，如果有返回true -->
                <small class="invalid-feedback <?php echo in_array('title',$err_arr)?'showInfo':''; ?>">这是一个标题</small>
            </div>
            <div class="form-group">
                <label for="geshou">歌手</label>
                <input type="text" class="form-control" id="geshou" name="geshou">
                <small class="invalid-feedback <?php echo in_array('geshou', $err_arr) ? 'showInfo' : ''; ?>">歌手的名称</small>
            </div>
            <div class="form-group">
                <label for="zhuanji">专辑</label>
                <input type="text" class="form-control" id="zhuanji" name="zhuanji">
                <small class="invalid-feedback <?php echo in_array('zhuanji', $err_arr) ? 'showInfo' : ''; ?>">专辑名称</small>
            </div>
            <div class="form-group">
                <label for="source">资源文件</label>
                <!-- accept 用于设置可以接受的文件类型，可以使用MIMEtype,也可以使用后缀名，使用逗号连接 -->
                <input type="file" class="form-control" id="source" name="source" accept=".mp3">
                <small class="invalid-feedback <?php echo in_array('source', $err_arr) ? 'showInfo' : ''; ?>">文件上传</small>
            </div>
            <button class="btn btn-primary btn-block">上传</button>
        </form>
    </div>
</body>

</html>