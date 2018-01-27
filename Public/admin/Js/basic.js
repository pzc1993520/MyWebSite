$(function(){
	$(".treeview").click(function(){
		$(this).toggleClass("active").siblings().removeClass("active");
	})
	$(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii:00",
        language:"zh-CN",
        autoclose: true,
        minuteStep: 10,
        startDate:new Date(),
	});
	$('.selector-border').click(function(){
		$(this).attr('data-id','selected').siblings().removeAttr('data-id');
		$("#good_id").val($(this).attr('data-good-id'));
	})
})
