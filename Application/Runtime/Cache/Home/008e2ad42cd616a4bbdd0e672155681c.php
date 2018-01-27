<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="Keywords" content=""/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/uikit/2.27.4/js/uikit.min.js"></script>
		<script type="text/javascript">
			var u = "/DataBase",i = "Index/user";
		</script>		
		<script src="/DataBase/Public/home/js/basic.js" type="text/javascript" charset="utf-8"></script>
		<link href="https://cdn.bootcss.com/uikit/2.27.4/css/uikit.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/home/css/basic.css"/>
		<title>用户中心</title>
	</head>
	<body>
		<div class="uk-panel uk-panel-box">
			<article class="uk-comment">				
			    <a class="uk-float-right uk-icon-button uk-icon-close" href="<?php echo U('User/logout');?>"></a>
			    <header class="uk-comment-header">
			        <img class="uk-comment-avatar" src="<?php echo ((isset($user['user_thumb']) && ($user['user_thumb'] !== ""))?($user['user_thumb']): '/DataBase/Public/home/img/head_icon.png'); ?>"  style="width:60px;height:60px;">
			        <h4 class="uk-comment-title"><?php echo ($user[user_nickname]); ?></h4>
			        <div class="uk-comment-meta"><?php echo ((isset($user[user_intro]) && ($user[user_intro] !== ""))?($user[user_intro]):'这个家伙什么也没留下'); ?></div>
			    </header>
			</article>
			<div class="user_detail">					
				<ul class="uk-tab" data-uk-tab>
				    <li class="uk-active"><a href="#">全部订单</a></li>
				</ul>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><div class="uk-panel" style="padding:10px 0;border-bottom:1px solid #DDDDDD;">
						 <a href="<?php echo U(index,array('event_id'=>$ls[id]));?>">
						 	<div style="overflow: hidden;">
						 		<img src="/DataBase/<?php echo ($ls[good_thumb]); ?>" style="width:100px;max-height:120px;float:left;">
								<div style="margin-left:110px;">
									<h4><?php echo ($ls[good_name]); ?>     x <?php echo ($ls[event_amount]); ?></h4>
									<p><?php echo date('Y-m-d H:i:s',$ls[create_time]);?></p>
								</div>
						 	</div>
						</a>	
						<div class="uk-grid uk-text-center">
							<?php if($ls[status] == 2): if($ls[event_status] == 0): ?><div class="uk-width-1-1">未中奖</div>
								<?php else: ?>											
									<div class="uk-width-1-1">
										<div class="uk-panel" style="padding:10px;border:1px dotted #5E5E5E;">
											恭喜您中奖，您的奖券号码是: <code><?php echo ($ls[coupon_num]); ?></code>
										</div>
									</div><?php endif; ?>
							<?php else: ?>
								<div class="uk-width-1-3">未开奖</div>
								<div class="uk-width-2-3">				
									<?php switch($ls[status]): case "0": ?>商品销售中<?php break;?>
										<?php case "1": ?>商品等待开奖<?php break;?>
										<?php case "3": ?>商品已超时<?php break; endswitch;?>
								</div><?php endif; ?>
						</div>
					</div>
					<!--<article class="uk-comment">
					    <header class="uk-comment-header">
					    	 <a href="<?php echo U(index,array('event_id'=>$ls[id]));?>">
								
						        <h4 class="uk-comment-title"></h4>
							</a>							    	
					    </header>
					</article>
					<tr class="uk-table-middle">
						<td class="uk-text-center">
							<?php echo ($ls[event_amount]); ?>
						</td>
						<td>
							
						</td>
						<?php if($ls[status] == 2): if($ls[event_status] == 0): ?><td colspan="2">未中奖</td>
							<?php else: ?>
								<td>已中奖</td>														
								<td><?php echo ($ls[coupon_num]); ?></td><?php endif; ?>
						<?php else: ?>
							<td>未开奖</td>
							<td>商品											
								<?php switch($ls[status]): case "0": ?>销售中<?php break;?>
									<?php case "1": ?>等待开奖<?php break;?>
									<?php case "3": ?>已超时<?php break; endswitch;?>
							</td><?php endif; ?>
					</tr>--><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php echo ($page); ?>
			</div>
		</div>
	</body>
</html>