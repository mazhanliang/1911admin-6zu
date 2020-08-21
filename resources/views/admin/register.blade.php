<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台注册</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/admin/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/verificationNumbers.js"></script>
    <script src="/admin/js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            //验证码
            createCode();
            //测试提交，对接程序删除即可
            $(".submit_btn").click(function(){
                location.href="index.html";
            });
        });
    </script>
</head>
<body>
<form action="{{url('admin/logins')}}" method="get">
    <dl class="admin_login">
        <dt>
            <strong>1911-6组后台注册</strong>
            <em>Good Good Study , Day Day Up !</em>
        </dt>
        <dd class="user_icon">
            <input type="text" placeholder="账号" name="user_name" class="login_txtbx"/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="密码"  name="user_pwd" class="login_txtbx"/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="确认密码"  name="user_pwd" class="login_txtbx"/>
        </dd>
        {{--    <dd class="val_icon">--}}
        {{--        <div class="checkcode">--}}
        {{--            <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">--}}
        {{--            <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>--}}
        {{--        </div>--}}
        {{--        <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">--}}
        {{--    </dd>--}}
        <dd>
            <input type="button" value="立即注册" name="register" class="submit_btn"/>
        </dd>
        <dd>
            <input type="button" value="立即登陆" name="login" class="submit_btn"/>
        </dd>

        <dd>
            <p>© 2020-2066 DeathGhost 版权归yqc所有</p>
            <p>豫E-2002-0522-1</p>
        </dd>
    </dl>
</form>
</body>
</html>
<script src="/admin/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("input[name='login']").click(function(){
            location.href="/admin/login";
        });
        $("input[name='register']").click(function(){
            location.href="/admin/register";
        });
    });
</script>
