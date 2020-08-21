
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/global.js"></script>
    <link rel="stylesheet" href="/admin/css/font.css">
    <link rel="stylesheet" href="/admin/css/xadmin.css">
    <script type="text/javascript" src="/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admin/js/xadmin.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
        <div id="head">
            <div class="logo"><a href="index.html"><img src="/admin/images/dclogo.gif" alt="logo"></a></div>
            <div class="nav">
                <ul>
                    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                        <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
                    </li>
                    <li><a href="../index.php" target="_blank">查看站点</a></li>
                    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
                    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
                    <li class="noRight"><a href="module.html">DouPHP+</a></li>
                </ul>
                <ul class="navRight">
                    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
                        <div class="drop mUser">
                            <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
                            <a href="manager.php?rec=cloud_account">设置云账户</a>
                        </div>
                    </li>
                    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
            <ul class="top">
                <li><a href="index.html"><i class="home"></i><em>管理首页</em></a></li>
            </ul>
            <ul>
                <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
                <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
            </ul>
            <ul>
                <li><a href="article_category.html"><i class="articleCat"></i><em>文章分类</em></a></li>
                <li><a href="article.html"><i class="article"></i><em>文章列表</em></a></li>
            </ul>
            <ul class="bot">
                <li><a href="{{url('admin/userreg')}}"><i class="manager"></i><em>添加管理员</em></a></li>
                <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>
            </ul>
        </div></div>
    <div id="dcMain"> <!-- 当前位置 -->
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>管理员名称
                    </label>
        <div class="layui-input-inline">
                        <input type="text" name="admin_name" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
        </div><br>
                    <label for="phone" class="layui-form-label">
                        <span class="x-red">*</span>管理员密码
                    </label>
        <div class="layui-input-inline">
                        <input type="password" id="admin_pwd" name="admin_pwd" required="" lay-verify="phone"
                               autocomplete="off" class="layui-input">
        </div><br>
                        <label for="username" class="layui-form-label">
                            <span class="x-red">*</span>管理员角色
                        </label>
                            <select name="role_id">
                                {{--                                    @foreach($arr as $k => $v)--}}
                                {{--                                        <option value="{{$v->role_id}}">{{$v->role_name}}</option>--}}
                                {{--                                    @endforeach--}}
                                <option>管理员</option>
                            </select>
                        <label for="L_repass" class="layui-form-label">
                        </label>
                        <button  class="layui-btn" lay-filter="add" id="add">
                            增加
                        </button>
                </div>
            </div>
    </div>



</body>
</html>