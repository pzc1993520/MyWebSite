<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="Keywords" content=""/>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/uikit/2.25.0/js/uikit.min.js"></script>
		<script type="text/javascript">
			var u = "/DataBase",i = "Index/detail";
		</script>
		<script src="/DataBase/Public/home/js/basic.js" type="text/javascript" charset="utf-8"></script>
		<link href="https://cdn.bootcss.com/uikit/2.25.0/css/uikit.min.css" rel="stylesheet">
		<link href="https://cdn.bootcss.com/uikit/2.25.0/css/uikit.gradient.min.css" rel="stylesheet">
		<link href="https://cdn.bootcss.com/uikit/2.25.0/css/components/progress.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/DataBase/Public/home/css/basic.css"/>
		<title>商品详情</title>
	</head>
	<body>
		<div class="uk-panel uk-panel-box uk-margin-large-bottom">
            <div class="uk-panel-teaser">
                <img src="/DataBase/<?php echo ($res[good_img]); ?>" width="100%" alt="">
            </div>
            <h4 class="uk-width-1-1 uk-text-center"><?php echo ($res[good_name]); ?></h4>
    		<p class="uk-width-1-1"><?php echo ($res[good_intro]); ?></p>
            <hr />
    		<div class="uk-width-1-1">
    			<p><span class="uk-badge uk-badge-danger uk-badge-notification">本期进度</span></p>
				<div class="uk-progress uk-progress-danger">
				    <div class="uk-progress-bar" style="width:<?php echo ($res[amount]-$res[remain])/$res[amount]*100;?>%;min-width:15%;"><?php echo ($res[amount]-$res[remain])/$res[amount]*100;?>%</div>
				</div>
    		</div>      
    		<form class="uk-form uk-form-horizontal" id="buy_form" action="<?php echo U('Cart/run_buy');?>" method="post">
                <div class="uk-form-row">
                	<input type="hidden" name="user_id" id="user_id" value="<?php echo ($_SESSION['user_id']); ?>" />
                	<input type="hidden" name="event_id" id="event_id" value="<?php echo ($res[id]); ?>" />
                    <label class="uk-form-label" for="form-h-it">购买数量</label>
                    <div class="uk-form-controls">
                        <input type="number" class="uk-width-1-1" min="1" max="<?php echo ($res[remain]); ?>" value="1" name="buy_amount">
                        <p class="uk-form-help-block">购买数量越多，中奖几率越大</p>
                    </div>
                </div>
                <div class="uk-form-row">
                	<input type="submit" class="uk-button uk-button-danger uk-button-large uk-width-1-1" value="<?php echo ($res[good_price]); ?>元/份立即加入" style="color:#fff;"/>
                </div>
            </form>
            <hr />
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
		<div class="uk-panel uk-panel-box" style="position:fixed;left:0;bottom:0;width:100%;border-top:1px solid #999999;">
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