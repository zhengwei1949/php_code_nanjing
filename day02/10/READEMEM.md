## 总结
- 把客户端和服务器想像成是两个人
- 客户端和服务器沟通有两种方式
    + 客户端想从服务器那里拿一个文件
        1. 当然，为了准确的获取信息，我们有时候需要带上查询参数说明一下我们要什么数据
    + 客户端想把一些数据传递给服务器
- 从代码的角度理解
    + 如果我们在地址栏输一个网址，按回车，我们是想要____?
    + 我们通过script[src=""],link[href=""],img[src=""]，我们是想要__?
    + 我们注册一个账号，我们是想要___?
    + 我们每天填写博客谷反馈，我们是想要____?
- 区别
    + get只能传递4kb数据，post理论上说无限制，通过php.ini进行配置
    + get不安全,post安全
