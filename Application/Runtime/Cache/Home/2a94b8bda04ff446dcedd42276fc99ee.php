<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="Keywords" content=""/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/uikit/2.27.4/js/uikit.min.js"></script>
		<script type="text/javascript">
			var u = "/DataBase",i = "Index/index";
		</script>
		<script src="/DataBase/Public/home/js/basic.js" type="text/javascript" charset="utf-8"></script>
		<link href="https://cdn.bootcss.com/uikit/2.27.4/css/uikit.min.css" rel="stylesheet">
		<link href="https://cdn.bootcss.com/uikit/2.27.4/css/components/progress.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/home/css/basic.css"/>
		<title>优惠券限量</title>
	</head>
	<body class="uk-container uk-container-center">
		<div class="uk-block">
			<!--<img src="/DataBase/Public/home/img/banner.jpg" style="width: 100%;"/>-->
			<div id="marquee" class="marquee uk-border-rounded"></div>
		</div>
		<ul class="data-display uk-grid uk-grid-width-small-1-2 uk-grid-width-medium-1-4">
			<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i; if($rs[remain_time] > time() ): ?><li>
						<div class="uk-panel uk-panel-box uk-border-rounded uk-overlay">
	                        <div class="uk-panel-teaser">
	                        	<?php if(empty($rs[good_img])): ?><img src="/DataBase/Public/default/default.jpg" style="width:100%;height:150px;padding:5px;"/>
								<?php else: ?>
									<img src="/DataBase/<?php echo ($rs[good_img]); ?>" alt="" style="width:100%;height:150px;padding:5px;"/><?php endif; ?>                        	
	                        </div>
	                      	<div class="info">
								<div class="uk-panel-title"><?php echo ($rs['good_name']); ?></div>
								<div>
									<p>									
										<span class="remain_time" data-remain-time="<?php echo ($rs['remain_time']-time());?>">
											<span class="uk-icon-clock-o"></span>
											<span class="day uk-badge uk-badge-danger uk-badge-notification">0天</span>
											<span class="hour uk-badge uk-badge-danger uk-badge-notification">0时</span>
											<span class="min uk-badge uk-badge-danger uk-badge-notification">0分</span>
											<span class="sec uk-badge uk-badge-danger uk-badge-notification">0秒</span>
										</span>
									</p>
									<p>本期进度</p>
									<div class="uk-progress uk-progress-danger">
									    <div class="uk-progress-bar" style="width:<?php echo ($rs[amount]-$rs[remain])/$rs[amount]*100;?>%;min-width:15%;"><?php echo ($rs[amount]-$rs[remain])/$rs[amount]*100;?>%</div>
									</div>
								</div>
								<div class="button_group">
									<a class="uk-button uk-button-danger uk-width-1-1" id="add_cart" href="<?php echo U('detail',array('event_id'=>$rs[id]));?>"><?php echo ($rs['good_price']); ?>元立即抢<span class="uk-icon-cart-plus"></span></a>
								</div>
							</div>
	                   </div>
					</li>
				<?php else: ?>	
					<li>
						<div class="uk-panel uk-panel-box uk-border-rounded uk-overlay">
	                        <div class="uk-panel-teaser">
	                        	<?php if(empty($rs[good_img])): ?><img src="/DataBase/Public/default/default.jpg" style="width:100%;height:150px;padding:5px;"/>
								<?php else: ?>
									<img src="/DataBase/<?php echo ($rs[good_img]); ?>" alt="" style="width:100%;height:150px;padding:5px;"/><?php endif; ?>                        	
	                        </div>
	                      	<div class="info">
								<div class="uk-panel-title"><?php echo ($rs['good_name']); ?></div>
								<div>
									<p>									
										<span class="remain_time">
											<span class="uk-icon-clock-o"></span>
											<span class="uk-badge uk-badge-muted uk-badge-notification">0天</span>
											<span class="uk-badge uk-badge-muted uk-badge-notification">0时</span>
											<span class="uk-badge uk-badge-muted uk-badge-notification">0分</span>
											<span class="uk-badge uk-badge-muted uk-badge-notification">0秒</span>
										</span>
									</p>
									<p>本期进度</p>
									<div class="uk-progress uk-progress-muted">
									    <div class="uk-progress-bar uk-progress-bar-muted" style="width:<?php echo ($rs[amount]-$rs[remain])/$rs[amount]*100;?>%;min-width:15%;"><?php echo ($rs[amount]-$rs[remain])/$rs[amount]*100;?>%</div>
									</div>
								</div>
								<div class="button_group">
									<a class="uk-button uk-button-muted uk-width-1-1" href="#">已过期<span class="uk-icon-cart-plus"></span></a>
								</div>
							</div>
							<div class="uk-overlay-panel">
								<img src="/DataBase/Public/default/fin.png"/>
							</div>
	                   </div>
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="refresh_more uk-margin-large-bottom">
		</div>
		<div class="uk-panel uk-panel-box" style="position:fixed;left:0;bottom:0;width:100%;">
			<div class="user_panel uk-grid uk-text-center">
				<div class="uk-width-1-4">
					<div class="uk-panel">
						<a class="uk-link-muted" href="<?php echo U('index');?>">
							<span class="uk-icon-home" style="font-size:40px;"></span>
						</a>
					</div>
				</div>
				<div class="uk-width-1-4">
					<div class="uk-panel">
						<a class="uk-link-muted" href="#">
							<span class="uk-icon-navicon" style="font-size:40px;"></span>
						</a>
					</div>
				</div>
				<div class="uk-width-1-4">
					<div class="uk-panel">
						<a class="uk-link-muted" href="#brief" data-uk-modal="{center:true}" class="brief">
							<span class="uk-icon-question" style="font-size:40px;"></span>
						</a>
					</div>
				</div>
				<div class="uk-width-1-4">
					<div class="uk-panel">
						<a class="uk-link-muted" href="<?php echo ($_SESSION[user_id]?U('user'):U('User/index')); ?>">
							<span class="uk-icon-user" style="font-size:40px;"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="brief" class="uk-modal">
		    <div class="uk-modal-dialog">
	    		<dl class="uk-description-list-horizontal">
		    		<dt>活动细则</dt>
		    		<dd>
		    			1.用户可以在本页面抢购限时商品并拍下,购买次数越多中奖几率越大
		    		</dd>
		    		<dd>
		    			2.本场商品拼购次数达到上限即可开始抽奖,将有一位幸运用户获得商品,系统会自动将商品发送到中奖用户账户
		    		</dd>
		    		<dd>
		    			3.中奖用户可以在用户中心查看参与抽奖的商品和已经中奖的商品
		    		</dd>
		    		<dd>
		    			4.未中奖用户我们会根据竞拍金额发放相应的其他奖励
		    		</dd>
		    		<dd>
		    			5.本活动最终解释权归本公司所有
		    		</dd>
		    	</dl>
		    </div>
		</div>
	</body>
</html>