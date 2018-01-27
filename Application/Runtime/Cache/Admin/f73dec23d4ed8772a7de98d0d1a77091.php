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
		<div class="row">
			<div class="content">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">商品浏览</h3>
					</div>
					<!--数据展示-->
					<div class="box-body">
						<table class="table table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th class="col-md-1">ID</th>
									<th colspan="2">商品名称</th>
									<th  class="col-md-3">商品INFO</th>
									<th>商品价格</th>
									<th class="col-md-2">上传时间</th>
									<th>活动状态</th>
									<th class="col-md-2">操作</th>
								</tr>
							</thead>
							<tbody>								
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($ls[id]); ?></td>
										<td style="width:50px;height:50px;">											
											<?php if(empty($ls[good_thumb])): ?><img src="/DataBase/Public/admin/img/default-50x50.gif" alt="" />
											<?php else: ?>
												<img src="/DataBase/<?php echo ($ls[good_thumb]); ?>" alt="" /><?php endif; ?>
										</td>
										<td><?php echo ($ls[good_name]); ?></td>
										<td><?php echo ($ls[good_intro]); ?></td>
										<td><?php echo ($ls[good_price]); ?></td>
										<td><?php echo date('Y-m-d H:i:s',$ls[create_time]);?></td>
										<td><?php echo ($ls[good_status]==1)?'已参加活动':'未参加活动';?></td>
										<td>
											<a href="<?php echo U('modify',array('good_id'=>$ls[id]));?>"><span><i class="fa fa-cog"></i> 编辑</span></a>
											<a href="<?php echo U('Common/delData',array('table'=>'goods','good_id'=>$ls[id]));?>" onclick="return confirm('删除将移除数据及相关条目!确认删除?')"><span><i class="fa fa-trash"></i> 删除</span></a>											
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div>
					<!--分页-->
					<div class="box-footer clearfix">
						<?php echo ($page); ?>
		            </div>
		        </div>
			</div>
		</div>
	</body>
</html>