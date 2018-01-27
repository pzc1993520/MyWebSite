<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//查询活动表中的商品
    	$model = M();
		$res = $model->table('events e,goods g')->where("e.good_id=g.id")->field(array(
			'e.id','e.amount','e.remain','e.remain_time','g.good_name','g.good_price','g.good_img'
		))->order('update_time')->limit(16)->select();
		$this->assign(array(
			'res'=>$res
		));
		$this->show();
    }
	//用户中心
	public function user(){
		if(is_null($_SESSION['user_id'])){
			$this->error("请先登录");
		};
		$id = $_SESSION['user_id'];
		$user = M("user");
		$res = $user->where(array("id"=>$id))->find();
		
		$count = M('history')
		->where(array('user_id'=>$id))
		->join('events ON history.event_id = events.id')->count();
		$Page = new \Think\Page($count,15);
		$show = $Page->show();
		
		$list = M('history')
		->where(array('user_id'=>$id))
		->join('events ON history.event_id = events.id')
		->join('goods ON events.good_id = goods.id')
		->field(array(
			"history.event_amount","history.create_time","history.event_status",
			"events.id","events.coupon_num","events.status",
			"goods.good_name","goods.good_thumb"
		))
		->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign(array(
			'user'=>$res,
			'list'=>$list,
			'page'=>$show
		));
		$this->show();
	}
	public function detail(){
		$res = M("events")->where(array(
			"events.id"=>I('get.event_id')
		))->join("goods ON events.good_id = goods.id")->field(array(
			"events.id","events.good_id","events.amount","events.remain",
			"goods.good_name","goods.good_intro","goods.good_price","goods.good_img"
		))->find();
		$this->assign(array(
			'res'=>$res
		));
		$this->show();
	}
	
	public function get_reward(){
		$user = new \Home\Model\UserModel();
		$good = new \Home\Model\GoodModel();
		$res = array(
			"user" => $user->where(array(
				"id" 					=>  mt_rand(2,$user->count()),
				"user_rank"	=> 1,
			))->getField("user_nickname"),
			"good" => $good->where(array(
				"id"					=> mt_rand(1,$good->count())
			))->getField("good_name"),
		);
		$this->ajaxReturn($res);
	}
}