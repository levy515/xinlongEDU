<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理系统</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/body.css"/>
</head>
<body>
<div class="container">
    <section id="content">
        <form action="">
            <h1>后台登录</h1>
            <div>
                <input type="text" placeholder="用户名" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="密码" required="" id="password" />
            </div>
            <div class="">
                <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>
            </div>
            <div>
                <input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>
                <a href="#">忘记密码?</a>
            </div>
        </form>
    </section>
</div>
</body>
</html>