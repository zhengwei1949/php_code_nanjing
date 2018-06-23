## 铺垫
- 我们只是前端，学php是为了理解原理，大家一定不要陷入细节当中去了
- 先演示一下最简单的文件上传
    + 存在的问题
        1. 万一两个用户上传的文件名是一样的，后面的会覆盖前面的
        2. 万一用户上传一下
- 理解enctype
    + 太长了写不出来怎么办(创建一个html文件，创建一个form标签，会有提示的)
    + 记忆：如果只有普通类型的input提交，不写或者写默认值enctype="application/x-www-form-urlencoded"
    + 记忆：如果有文件上传，要变成multipart/form-data
- 理解$_FILES是一个二维数组
- 理解$_FILES['文件名']['error']错误代码值的含义
    + http://php.net/manual/zh/features.file-upload.errors.php
    + 如果不能上网 --> 看手册
    