function get_reward(){
	$.get(u+"/Home/Index/get_reward","",function(res){
		$("<p></p>").attr("id","slide_title").text("恭喜用户"+res.user+"获得奖品"+res.good).appendTo("#marquee").animate({
			"left":"0"
		},5000,"linear").delay(3000).animate({
			"left":"-100%",
		},5000,"linear");
		setTimeout(function(){
			$("#slide_title").remove();
		},13000);
	})
}
function checkPWD(){
	if($("#password_check").val() != $("#sign_pwd").val()){
		$("#password_check").addClass("uk-form-danger");
		$("body").prepend($('<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href="#"></a>两次输入的密码不一致,请检查</div>'));
		setTimeout(function(){
			$(".uk-alert-close").click();
		},2000);
		return false;
	}else{
		$(this).removeClass("uk-form-danger");
		return true;
	}
}
function checkPhone(){
	if(/^1(3|4|5|7|8)\d{9}$/.test($("#sign_phone").val())){
    	$("#sign_phone").removeClass("uk-form-danger");
    	return true;
	}else{
		$("#sign_phone").addClass("uk-form-danger");
		$("body").prepend($('<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href="#"></a>请输入有效的手机号码</div>'));
		setTimeout(function(){
			$(".uk-alert-close").click();
		},2000);
		return false;
	}
}
$(function(){
	switch (i){
		case "Index/index":
			var day,hour,min,sec;					
			var good_timer = setInterval(function(){
				$(".remain_time").each(function(){
					if($(this).attr("data-remain-time")>0){
						$(this).attr("data-remain-time",$(this).attr("data-remain-time")-1);
						//一天是24*3600秒
						$(this).children(".day").text(Math.floor($(this).attr("data-remain-time")/(3600*24))+"天");
						//一小时是3600秒
						$(this).children(".hour").text( Math.floor($(this).attr("data-remain-time")%(3600*24)/3600)+"时");
						//一分钟是60秒
						$(this).children(".min").text(Math.floor(($(this).attr("data-remain-time")%(3600*24)%3600)/60)+"分");
						//一秒就是一秒
						$(this).children(".sec").text(Math.floor(($(this).attr("data-remain-time")%(3600*24)%3600)%60)+"秒");
					}
				});
			},1000);
//			$("#marquee").ready(function(){
//				get_reward();
//				setInterval(function(){
//					get_reward();
//				},13050);
//			});
			break;
		case "User/index":
			$("#verify_img").click(function(){
				$(this).attr("src",$(this).attr("src")+"?"+Math.random())
			})
			$("#sign_up").submit(function(){
				var pwd = checkPWD();
				var phon = checkPhone();
				if (pwd & phon) {
					$(this).find("input").removeClass("uk-form-danger");
					var str = "{";
					var res = $(this).serializeArray()
					$.each(res,function(i,v){
						str += '"'+v["name"]+'":"'+v["value"]+'",';
					})
					str = JSON.parse(str.substr(0,str.length-1).concat("}").trim());
					$.post(u,str,function(res){
						if (res.res) {
							$("body").prepend($('<div class="uk-alert uk-alert-success" data-uk-alert=""><a class="uk-alert-close uk-close" href="#"></a>'+res.name+'</div>'));
							setTimeout(function(){
								location.href = u+"/Home/Index/index";
							},3000);
						} else{
							$(res.target).addClass("uk-form-danger");							
							$("body").prepend($('<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href="#"></a>'+res.name+'</div>'));
							setTimeout(function(){
								$(".uk-alert-close").click();
							},2000);
						}			
						$("#verify_img").click();
					})
				}				
				return false;
			})	
		break;
		case "Index/detail":
			$("#buy_form").submit(function(){
				if($('#user_id').val()){
					$(this).submit();
				}else{
					alert("请先登录！");
					location.href = u+"/Home/User/index";
				}
				return false;
			})
		break;
	}
});
