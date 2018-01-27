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
				<div class="row">
					<div class="content">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">编辑商品</h3>
							</div>
							<form role="form" enctype="multipart/form-data" method="post" action="<?php echo $good_id?U('Common/editData',array('table'=>'goods','good_id'=>$good_id)):U('Common/addData',array('table'=>'goods'));?>">
								<div class="box-body">									
									<div class="form-group">
										<label for="good_id">商品ID</label>
										<input type="text" class="form-control" name="good_id" id="good_id" value="<?php echo ($res[id]); ?>" disabled=""/>
									</div>
									<div class="form-group">
										<label for="good_name">商品名称</label>
										<input type="text" class="form-control" id="good_name" name="good_name" value="<?php echo ($res[good_name]); ?>" placeholder="商品名称" required="">
									</div>
									<div class="form-group">
										<label for="good_name">商品INFO(选填)</label>
										<input type="text" class="form-control" id="good_intro" name="good_intro" value="<?php echo ($res[good_intro]); ?>" placeholder="商品简介,限制在64字以内">
									</div>
									<div class="form-group">
										<label for="good_price">商品价格</label>
										<input type="text" class="form-control" id="good_price" name="good_price" value="<?php echo ($res[good_price]); ?>" placeholder="商品价格" required="">
									</div>
									<div class="form-group">
										<label for="good_thumb">商品图片</label>
										<input type="hidden" name="old_img" id="old_img" value="<?php echo ($res[good_img]); ?>" />
										<input type="hidden" name="old_thumb" id="old_thumb" value="<?php echo ($res[good_thumb]); ?>" />
										<input type="file" id="good_thumb" name="good_thumb">					
										<p class="help-block">图片大小限制在3M以内</p>
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