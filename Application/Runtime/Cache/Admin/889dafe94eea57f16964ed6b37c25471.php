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
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/bootstrap-datetimepicker.min.css"/>
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/admin/css/basic.css"/>
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="/DataBase/Public/admin/Js/bootstrap-datetimepicker.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/DataBase/Public/admin/Js/adminlte.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/DataBase/Public/admin/Js/basic.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var u = "/DataBase";
		</script>		
		<title></title>
	</head>
	<body>
		<div class="content">
				<div class="row">
					<div class="content">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">登录活动商品</h3>
							</div>
							<form role="form" enctype="multipart/form-data" method="post" action="<?php echo U('run_modify',array('event_id'=>$event[id]));?>">
								<div class="box-body">	
									<div class="form-group">
										<label for="volume_name">已选中商品</label>
										<input type="text" class="form-control" name="good_id" id="good_id" value="<?php echo ($event[good_id]); ?>" readonly="readonly"/>
										<div class="content">
											<div class="row" style="min-height:150px;">
												<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><div class="col-xs-4 col-md-1 selector-border" data-good-id="<?php echo ($ls[id]); ?>">
														<a href="#" class="thumbnail">
													    	<?php if(empty($ls[good_thumb])): ?><img src="/DataBase/Public/admin/img/default-50x50.gif" width="100%" title="<?php echo ($ls[good_name]); ?>"/>
															<?php else: ?>
																<img src="/DataBase/<?php echo ($ls[good_thumb]); ?>" width="100%" title="<?php echo ($ls[good_name]); ?>"/><?php endif; ?>
													    </a>
													</div><?php endforeach; endif; else: echo "" ;endif; ?>
											</div>
											<?php echo ($page); ?>
										</div>
									</div>
									<hr />
									<div class="form-group">
										<label for="amount">投放数量</label>
										<input class="form-control" type="number" name="amount" id="amount" value="<?php echo ($event[amount]); ?>" />
									</div>
									
									<div class="form-group">
										<label for="amount">中奖券码</label>
										<input class="form-control" type="text" name="coupon_num" id="coupon_num" value="<?php echo ($event[coupon_num]); ?>" required=""/>
									</div>
									<div class="form-group">  
							           	<label>选择截止日期</label>
							           	<div class="input-append date form_datetime">
										    <input type="text" value="<?php echo ($event[remain_time]); ?>" id="date-time" name="remain_time" readonly>
										    <span class="add-on"><i class="icon-remove fa fa-close"></i></span>
										    <span class="add-on"><i class="icon-calendar fa fa-calendar"></i></span>
										</div>
									</div>						
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">更新</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>