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
								<h3 class="box-title">编辑活动</h3>
							</div>
							<form role="form" enctype="multipart/form-data" method="post" action="<?php echo $volume_id?U('Common/editData',array('table'=>'volume','volume_id'=>$volume_id)):U('Common/addData',array('table'=>'volume'));?>">
								<div class="box-body">									
									<div class="form-group">
										<label for="volume_id">活动ID</label>
										<input type="text" class="form-control" name="volume_id" id="volume_id" value="<?php echo ($res[id]); ?>" disabled=""/>
									</div>
									<div class="form-group">
										<label for="volume_name">活动名称</label>
										<input type="text" class="form-control" id="volume_name" name="volume_name" value="<?php echo ($res[volume_name]); ?>" placeholder="活动名称" required="">
									</div>
									<div class="form-group">
										<label for="remain_time">活动结束时间</label>
										<input type="datetime" class="form-control" id="remain_time" name="remain_time" value="<?php echo ($res[remain_time]); ?>" placeholder="活动截止日期" required="">
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