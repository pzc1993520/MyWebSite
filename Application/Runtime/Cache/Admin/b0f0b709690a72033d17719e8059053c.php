<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/database/Public/Style/skin.css" />
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="/database/Public/Images/mail_left_bg.gif">
                    <img src="/database/Public/Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="/database/Public/Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="/database/Public//database/Public/Images/content_bg.gif">
                        <tr><td height="31"><div class="title">欢迎界面</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="/database/Public/Images/mail_right_bg.gif"><img src="/database/Public/Images/nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- 中间部分开始 -->
            <tr>
                <!--第一行左边框-->
                <td valign="middle" background="/database/Public/Images/mail_left_bg.gif">&nbsp;</td>
                <!--第一行中间内容-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- 空白行-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <tr>
                            <!--左边内容-->
                            <td colspan="2" valign="top">
                                <h3 style="margin:0 0 10px 10px;">今天是<?php echo date('Y-m-d H:i:s',time());?></h3>
                                <img src="/database/Public/Images/ts.gif" width="16" height="16" style="margin-left:10px;"> 提示：<br />
                                <p style="text-indent:20px;line-height:25px;margin-left:10px;font-size:15px;">您现在使用的是 Eduask网络工作室 开发的一套用于构建企业型网站的专业系统！如果您有任何疑问请点<span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=609307843&site=qq&menu=yes" onfocus="this.blur()"><img style="vertical-align:middle;"border="0" src="http://wpa.qq.com/pa?p=2:609307843:41" alt="Eduask为您服务" title="Eduask科技"></a> </span>在线客服进行咨询！<br />&nbsp;&nbsp;&nbsp;&nbsp;此程序是您建立地区级商家信息门户的首选方案！</p>
                            </td>
                            <!--间隔-->
                            <td width="7%">&nbsp;</td>
                            <!--右边内容-->
                            <td width="40%" valign="top">
                                <table width="100%" height="150" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="7%" height="27" background="/database/Public/Images/news_title_bg.gif">
                                            <img src="/database/Public/Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="93%" background="/database/Public/Images/news_title_bg.gif" class="left_bt">登录信息</td>
                                    </tr>
                                    <tr>
                                        <td height="5" colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="100" valign="top" colspan="2" id="news">
                                            <ul>
                                                <li>欢迎您,尊敬的<b><?php echo session('admin_uname');?></b></li>
                                                <li>您的登陆IP是<b><?php echo session('admin_ip');?></b></li>
                                                <li>上次登陆IP是<b><?php echo session('last_ip');?></b></li>
                                                <li>您的登陆时间是<b><?php echo session('admin_time');?></b></li>
                                                <li>上次登录时间是<b><?php echo session('last_time');?></b></li>
                                                <li>丰趣海淘后台管理系统</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr><td height="5" colspan="2">&nbsp;</td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="20"><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <!--第二行-->
                        <tr>
                            <td colspan="2" valign="top">
                                <table width="100%" height="230" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="7%" background="/database/Public/Images/news_title_bg.gif">
                                            <img src="/database/Public/Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="93%" background="/database/Public/Images/news_title_bg.gif" class="left_bt">最新动态</td>
                                    </tr>
                                    <tr>
                                        <td height="186" valign="top" colspan="2"></td>
                                    </tr>
                                    <tr><td height="5" colspan="2">&nbsp;</td></tr>
                                </table>
                            </td>
                            <td>&nbsp;</td>
                            <td valign="top">
                                <table width="100%" height="230" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="7%" background="/database/Public/Images/news_title_bg.gif">
                                            <img src="/database/Public/Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="93%" height="27" background="/database/Public/Images/news_title_bg.gif" class="left_bt">最新动态</td>
                                    </tr>
                                    <tr><td height="186" valign="top">&nbsp;</td><td height="102" valign="top"></td></tr>
                                    <tr><td height="5" colspan="2">&nbsp;</td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <img src="/database/Public/Images/icon_mail.gif" width="16" height="11"> 客户服务邮箱：Eduask@foxmail.com<br />
                               
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td background="/database/Public/Images/mail_right_bg.gif">&nbsp;</td>
            </tr>
            <!-- 底部部分 -->
            <tr>
                <td valign="bottom" background="/database/Public/Images/mail_left_bg.gif">
                    <img src="/database/Public/Images/buttom_left.gif" width="17" height="17" />
                </td>
                <td background="/database/Public/Images/buttom_bgs.gif">
                    <img src="/database/Public/Images/buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="/database/Public/Images/mail_right_bg.gif">
                    <img src="/database/Public/Images/buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
</html>