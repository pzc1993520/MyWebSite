<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/AdminLTE.min.css"/>
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/skins/skin-blue.min.css"/>
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="/DataBase/Public/admin/Js/adminlte.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/DataBase/Public/admin/Js/basic.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var u = "/DataBase";
		</script>
		<title></title>
	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="index2.html" class="logo">
					<span class="logo-mini"><b>A</b>LT</span>
					<span class="logo-lg"><b>Admin</b>LTE</span>
				</a>
				
				<nav class="navbar navbar-static-top">
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<?php if($_SESSION[admin_thumb]): ?><img src="/DataBase/<?php echo ($_SESSION[admin_thumb]); ?>" class="user-image" alt="User Image">
									<?php else: ?>
										<img src="/DataBase/Public/admin/img/avatar<?php echo mt_rand(1,5);?>.png" class="user-image" alt="User Image"><?php endif; ?>
									<span class="hidden-xs"><?php echo ($_SESSION[admin_name]); ?></span>
								</a>
								<ul class="dropdown-menu" style="z-index: 99999;">
									<!-- User image -->
									<li class="user-header">
										<?php if($_SESSION[admin_thumb]): ?><img src="/DataBase/<?php echo ($_SESSION[admin_thumb]); ?>" class="img-circle" alt="User Image">
										<?php else: ?>
											<img src="/DataBase/Public/admin/img/avatar<?php echo mt_rand(1,5);?>.png" class="img-circle" alt="User Image"><?php endif; ?>		
										<p>
											<?php echo ($_SESSION[admin_name]); ?> - <?php echo ($_SESSION[admin_rank] == 9)?'管理员':'非管理员角色';?>
											<small>最近登录时间:<?php echo date("Y-m-d h:i:s",time());?></small>
										</p>
									</li>									
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">个人中心</a>
										</div>
										<div class="pull-right">
											<a href="#" class="btn btn-danger btn-flat">注销</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
  			<aside class="main-sidebar" id="lte_sidebar">
				<section class="sidebar">
					<ul class="sidebar-menu">
						<li class="header">菜单</li>
						<li class="treeview">
							<a href="<?php echo U('info');?>" target="main_content">
								<span>首页</span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<span>商品管理</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo U('Good/modify');?>" target="main_content"><i class="fa fa-circle-o"></i>新增商品</a>
								</li>
								<li>
									<a href="<?php echo U('Good/preview');?>" target="main_content"><i class="fa fa-circle-o"></i>商品管理</a>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<span>活动管理</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo U('Event/modify');?>" target="main_content"><i class="fa fa-circle-o"></i>新增活动</a>
								</li>
								<li>
									<a href="<?php echo U('Event/preview');?>" target="main_content"><i class="fa fa-circle-o"></i>活动管理</a>
								</li>
							</ul>
						</li>
					</ul>
				</section>
  			</aside> 
  			<div class="content-wrapper">
  				<div class="embed-responsive embed-responsive-16by9">
				  	<iframe class="embed-responsive-item"  src="<?php echo U('info');?>" name="main_content" id="main_content"></iframe>
				</div>
			</div>
		</div>
	</body>
</html>