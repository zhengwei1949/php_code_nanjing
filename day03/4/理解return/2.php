<?php
//如果在全局范围中调用，则当前脚本文件中止运行
echo 123;
return;//作用类似die,exit
echo 456;
?>