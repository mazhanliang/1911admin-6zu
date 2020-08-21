
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
                    <li class="M noLeft"><a href="JavaScript:void(0);">您好，yqc</a>
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
                <li><a href="{{url('admin/classify')}}"><i class="articleCat"></i><em>分类添加</em></a></li>
                <li><a href="{{url('admin/classifylist')}}"><i class="article"></i><em>分类列表</em></a></li>            </ul>
            <ul class="bot">
                <li><a href="{{url('admin/adminreg')}}"><i class="manager"></i><em>添加管理员</em></a></li>
                <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>
            </ul>
        </div></div>
    <div id="dcMain"> <!-- 当前位置 -->
        <label for="username" class="layui-form-label">
            <span class="x-red">*</span>分类名称
        </label>
        <div class="layui-input-inline">
            <input type="text" name="classify_name" required="" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div><br>
        <label for="phone" class="layui-form-label">
            <span class="x-red">*</span>是否展示
        </label>
        <div class="layui-input-inline">
            <input type="radio" name="classify_show" id="a" value="1" checked>显示
            <input type="radio" name="classify_show" value="2">不显示
        </div><br>

        <label for="L_repass" class="layui-form-label">
        </label>
        <input type="button"value="增加"  class="layui-btn" lay-filter="add"  name="reg">

    </div>
</div>




</body>
</html>
<script>
    $(document).ready(function() {
        $("input[name='reg']").click(function(){
            var classify_name=$("input[name='classify_name']").val();
            var classify_show=$('input:radio[name="classify_show"]:checked').val();
            $.ajax({
                url: '{{url('/admin/ajaxclassify')}}',
                type:'get',
                data:{
                    classify_name:classify_name,
                    classify_show:classify_show
                },
                success: function(data){
                    if(data== '100'){
                        alert('增加成功！');
                    }
                    if(data== '101'){
                        alert('增加失败');
                    }
                    if(data== '102'){
                        alert('分类名称已存在！');
                    }
                }
            });
        });
    });
</script>