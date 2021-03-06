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
		<script type="text/javascript">
			var u = "/DataBase";
		</script>		
		<title></title>
	</head>
	<body>		
		<div class="content">
		<!--服务器基本信息-->
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>		
						<div class="info-box-content">
							<span class="info-box-text">内存占用</span>
							<span class="info-box-number"><?php echo round(memory_get_usage(true)/1024/1024/rtrim(get_cfg_var("memory_limit"),"M"), 2);?><small>%</small></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
			
						<div class="info-box-content">
							<span class="info-box-text">活动</span>
							<span class="info-box-number"><?php echo M("events")->count();?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			
				<!-- fix for small devices only -->
				<div class="clearfix visible-sm-block"></div>
			
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
			
						<div class="info-box-content">
							<span class="info-box-text">在售商品</span>
							<span class="info-box-number"><?php echo M("goods")->count();?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>		
						<div class="info-box-content">
							<span class="info-box-text">注册用户</span>
							<span class="info-box-number"><?php echo M("user")->count();?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>
			
			<!--月度报告-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">服务器概况</h3>              					
						</div>   					
			            <div class="box-body">
			              	<div class="row">
			                	<div class="col-sm-3 col-xs-6">
			                  		<div class="description-block border-right">
			                    		<h5 class="description-header"><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></h5>
			                    		<span class="description-text">服务器OS</span>
			                  		</div>
			                	</div>
			                	<div class="col-sm-3 col-xs-6">
			                  		<div class="description-block border-right">
			                    		<h5 class="description-header"><?php echo print(PHP_VERSION);?></h5>
			                    		<span class="description-text">PHP版本</span>
			                  		</div>
			                	</div>
			                	<div class="col-sm-3 col-xs-6">
			                  		<div class="description-block border-right">
			                			<h5 class="description-header"><?php echo get_cfg_var("memory_limit") ? get_cfg_var("memory_limit") : '-';;?></h5>
			                    		<span class="description-text">最大内存限制</span>
			                  		</div>
			                	</div>
			                	<div class="col-sm-3 col-xs-6">
			                  		<div class="description-block border-right">
			                    		<h5 class="description-header"><?php echo ini_get('upload_max_filesize');;?></h5>
			                    		<span class="description-text">文件上传限制</span>
			                  		</div>
			                	</div>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
			<!--最近商品-->
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">最近商品</h3>
						</div>
						<div class="box-body">
							<ul class="products-list product-list-in-box">
								<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gs): $mod = ($i % 2 );++$i;?><li class="item">
										<div class="product-img">
											<?php if(empty($gs[good_thumb])): ?><img src="/DataBase/Public/admin/img/default-50x50.gif" alt="" />
											<?php else: ?>
												<img src="/DataBase/<?php echo ($gs[good_thumb]); ?>" alt="" /><?php endif; ?>
										</div>
										<div class="product-info">
											<a href="javascript:void(0)" class="product-title"><?php echo ($gs[good_name]); ?><span class="label label-warning pull-right"></span></a>
											<span class="product-description">
												<?php echo date('Y年m月d日H:i:s',$gs[create_time]);?>
											</span>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						<div class="box-footer text-center">
							<a href="<?php echo U('preview');?>" class="uppercase">查看更多<i class="fa fa-arrow-circle-right"></i></a>
						</div>
						<!-- /.box-footer -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>