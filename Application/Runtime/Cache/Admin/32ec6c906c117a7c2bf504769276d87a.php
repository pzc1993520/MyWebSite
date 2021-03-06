<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="uk-height-1-1">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/AdminLTE.min.css"/>
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/skins/skin-blue.min.css"/>
		<title></title>
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="../../index2.html"><b>Admin</b>LTE</a>
			</div>
			<div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>		
				<form action="<?php echo U('login');?>" method="post">
					<?php if($error): ?><div class="alert alert-danger alert-dismissible">
			            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
			                用户名或密码错误！请检查
			              </div><?php endif; ?>
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="用户名" name="user_name">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="密码" name="user_pwd">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<div class="checkbox icheck">
							</div>
						</div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/DataBase/Public/admin/Js/adminlte.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	var u = "/DataBase",i= "Li";
</script>		
<script src="/DataBase/Public/admin/Js/basic.js" type="text/javascript" charset="utf-8"></script>