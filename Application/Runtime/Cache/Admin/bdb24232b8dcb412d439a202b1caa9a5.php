<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/database/Public/Style/skin.css" />
    <script type="text/javascript">
        function logout() {
            if(window.confirm('您确定要退出吗？')) {
                top.location = '<?php echo U("Admin/Login/logout");?>';
            }
        }       
    </script>
</head>
    <body>
        <table cellpadding="0" width="100%" height="64" style="background:#fff">
            <tr valign="top">
                <td width="50%">
                    <a href="javascript:void(0)"><img style="border:none" src="/database/Public/Images/logo.jpg" /></a>
                </td>
                <td width="30%" style="padding-top:13px;font:15px Arial,SimSun,sans-serif;color:#000">
                    管理员：<b><?php echo session('admin_uname');?></b> 您好，感谢登陆使用！
                </td>
                <td style="padding-top:10px;" align="center">
                    <a href="<?php echo U('Index/Index/index');?>" target="_top"><img style="border:none" src="/database/Public/Images/index.jpg" /></a>
                </td>
                <td style="padding-top:10px;" align="center">
                    <a href="javascript:void(0)"><img style="border:none" src="/database/Public/Images/out.jpg" onclick="logout();" /></a>
                </td>
            </tr>
        </table>
    </body>
</html>