<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/database/Public/Js/prototype.lite.js" type="text/javascript"></script>
    <script src="/database/Public/Js/moo.fx.js" type="text/javascript"></script>
    <script src="/database/Public/Js/moo.fx.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/database/Public/Style/skin.css" />
    <script type="text/javascript">
        window.onload = function () {
            var contents = document.getElementsByClassName('content');
            var toggles = document.getElementsByClassName('type');

            var myAccordion = new fx.Accordion(
            toggles, contents, {opacity: true, duration: 400}
            );
            myAccordion.showThisHideOpen(contents[0]);
            for(var i=0; i<document .getElementsByTagName("a").length; i++){
                var dl_a = document.getElementsByTagName("a")[i];
                    dl_a.onfocus=function(){
                        this.blur();
                    }
            }
        }
    </script>
</head>

<body>
    <table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
        <tr>
            <td width="182" valign="top">
                <div id="container">
                    <h1 class="type"><a href="javascript:void(0)">个人信息</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="<?php echo U('Admin/Person/index');?>" target="main">详细信息</a></li>
                            <li><a href="<?php echo U('Admin/Person/set');?>" target="main">安全设置</a></li>
                            <li><a href="<?php echo U('Admin/Person/bind');?>" target="main">绑定设置</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">栏目管理</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="<?php echo U('Admin/Sort/Sortlist');?>" target="main">栏目列表</a></li>
                            <li><a href="<?php echo U('Admin/Sort/Sortadd');?>" target="main">栏目添加</a></li>
                            <li><a href="<?php echo U('Admin/Sort/typelist');?>" target="main">分类查看</a></li>
                            <li><a href="<?php echo U('Admin/Sort/Sorttype');?>" target="main">分类添加</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">商品管理</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="<?php echo U('Admin/Brand/index');?>" target="main">品牌列表</a></li>
                            <li><a href="<?php echo U('Admin/Brand/addbrand');?>" target="main">添加品牌</a></li>
                            <li><a href="<?php echo U('Admin/Good/index');?>" target="main">商品列表</a></li>
                            <li><a href="<?php echo U('Admin/Good/addGood');?>" target="main">添加商品</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                    <h1 class="type"><a href="javascript:void(0)">会员管理</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="/database/Public/mem_reg.html" target="main">注册设置</a></li>
                            <li><a href="/database/Public/mem_chk.html" target="main">审核设置</a></li>
                            <li><a href="/database/Public/mem_add.html" target="main">添加会员</a></li>
                            <li><a href="/database/Public/mem_list.html" target="main">会员管理</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">系统设置</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="/database/Public/sys.html" target="main">网站设置</a></li>
                            <li><a href="/database/Public/admin.html" target="main">管理员设置</a></li>
                            <li><a href="javascript:void(0)" target="main">模板设置</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                    <h1 class="type"><a href="javascript:void(0)">其它设置</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="/database/Public/Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="javascript:void(0)" target="main">友情连接</a></li>
                            <li><a href="javascript:void(0)" target="main">在线留言</a></li>
                            <li><a href="javascript:void(0)" target="main">网站投票</a></li>
                            <li><a href="javascript:void(0)" target="main">邮箱设置</a></li>
                            <li><a href="javascript:void(0)" target="main">图片上传</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                </div>
            </td>
        </tr>
    </table>
</body>
</html>