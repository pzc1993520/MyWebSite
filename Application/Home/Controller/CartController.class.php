<?php
namespace Home\Controller;
use Think\Controller;
//购买控制器
class CartController extends Controller{	
	public function run_buy(){
		$opt = I('post.');
		$res = M('events')->where(array(
			"events.id"=>$opt['event_id'],
		))->join("goods ON events.good_id = goods.id")->field(array(
			"events.id","events.good_id","events.amount","events.remain",
			"goods.good_name","goods.good_intro","goods.good_price","goods.good_img"
		))->find();
	}
	public function notify(){
		header("Content-Type: text/html;charset=utf-8");
		echo '支付完成';
	}
	public function asyn_notify(){
		header("Content-Type: text/html;charset=utf-8"); 
		require './Public/php/qianbiyu_class.php';//调用千币鱼PHPsdk
		if(isset($_POST['return_data'])){		
			$return_info = json_decode(base64_decode($_POST['return_data']),true);//接收回调信息   必须先进行base64解码   $return 为数组
			$qianbiyu = new qianbiyu('1111111111','2222222222222222222222222222');;//这边填写平台后台生成的  apiid   ，   apikey
			if($qianbiyuInfo = $qianbiyu->checkSign($return_info['order_num'],$return_info['signkey'])){
				$order_num = $return_info['order_num'];//这是回调的订单号
				$return_param = $return_info['return_param'];//这是原样返回的你内容
				$amount = $return_info['amount'];//这是金额
				echo 'success';   //回调成功必须输出success  并且 不允许输出任何其他的字符！！！！
			}		
		}
	}
}
?>