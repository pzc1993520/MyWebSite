<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="uk-height-1-1">
	<head>
		<meta charset="UTF-8"/>
		<meta name="Keywords" content=""/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/uikit/2.27.4/js/uikit.min.js"></script>
		<script src="/DataBase/Public/home/js/basic.js" type="text/javascript" charset="utf-8"></script>		
		<script type="text/javascript">
			var u = "<?php echo U(signup);?>",i = "User/index";
		</script>
		<link href="https://cdn.bootcss.com/uikit/2.27.4/css/uikit.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/uikit/2.27.4/css/components/accordion.almost-flat.min.css"/>
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/home/css/basic.css"/>
		<title>用户登录</title>
	</head>
	<body class="uk-height-1-1">
		<div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-panel uk-panel-box uk-vertical-align-middle" style="width: 250px;">
            	<a href="<?php echo U('index/index');?>" class="uk-float-right uk-icon-button uk-icon-home"></a>
            	<nav class="uk-navbar">
            		<ul class="uk-navbar-nav" data-uk-tab="{connect:'#content'}">
						<li class="uk-active"><a href="#">登录</a></li>
						<li ><a href="#">注册</a></li>
					</ul>
            	</nav>
				<ul id="content" class="uk-switcher">
					<li>
						<form class="uk-form" id="login" action="<?php echo U(login);?>" method="post">
		                	<div class="uk-form-row">
		                        <input class="uk-width-1-1 uk-form-large" type="text" name="user_name" placeholder="用户名/手机号">
		                    </div>
		                    <div class="uk-form-row">
		                        <input class="uk-width-1-1 uk-form-large" type="password" name="user_pwd" placeholder="密码">
		                    </div>
		                    <div class="uk-form-row">
		                    	<input class="uk-width-1-1 uk-button uk-button-danger uk-button-large" type="submit" name="" id="" value="登陆" style="color:#fff;"/>
		                    </div>    
						</form>
					</li>
					<li>
						<form class="uk-form" id="sign_up" action="<?php echo U(signup);?>" method="post">
							<div class="uk-form-row">
								<input class="uk-width-1-1 uk-form-large" type="text" name="sign_name" id="sign_name" placeholder="用户名"/>
							</div>
							<div class="uk-form-row">
								<input class="uk-width-1-1 uk-form-large" type="password" name="sign_pwd" id="sign_pwd" placeholder="密码"/>
							</div>
							<div class="uk-form-row">
								<input class="uk-width-1-1 uk-form-large" type="password" id="password_check" placeholder="重复密码"/>
							</div>
							<div class="uk-form-row">
								<input class="uk-width-1-1 uk-form-large" type="text" name="sign_phone" id="sign_phone" placeholder="手机号"/>
							</div>
							<div class="uk-form-row">
								<input class="uk-width-1-3 uk-form-large" type="text" name="sign_verify" id="sign_verify"/>
								<img class="uk-width-1-3" src="<?php echo U('v_show');?>" alt="" id="verify_img"/>
							</div>
							<div class="uk-form-row">
								<input class="uk-width-1-1 uk-button uk-button-danger uk-button-large" type="submit" value="注册" style="color:#fff;"/>				
							</div>			
						</form>
					</li>
				</ul>
            </div>
       </div>
	</body>
</html>