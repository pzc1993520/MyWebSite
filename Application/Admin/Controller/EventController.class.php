<?php
namespace Admin\Controller;
use Think\Controller;
class EventController extends Controller{
	public function preview(){
		$count      = M("events")->count();
		$Page       = new \Think\Page($count,15);
		$show       = $Page->show();		
		$list = M("events")->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$goods = M('goods');
		foreach ($list as $key => $value) {
			$list[$key] = array_merge($list[$key],$goods->where(array("id"=>$value['good_id']))->field("good_name,good_thumb")->find());
		}
		$this->assign(array(
			"list"=>$list,
			"page"=>$show
		));
		$this->show();
	}
	public function modify(){
		if($id = I('get.event_id')){			
			$event = M('events')->where(array("id"=>$id))->find();
			$event['remain_time'] = date('Y-m-d H:i:s',	$event['remain_time']);
			$this->assign(array(
				'event'=>$event,
			));
		}
		$Goods = M('goods');
		$count = $Goods->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,12);
		$show  = $Page->show();//拼接分页html
		
		$list = $Goods->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign(array(
			'list'=>$list,
			'page'=>$show,
		));
		$this->show();
	}
	public function run_modify(){
		$event = M('events');		
		$data = $event->create();
		$data['update_time'] = time();
		$data['remain_time'] = strtotime($data['remain_time']);
		if($id = I('get.event_id')){
			$res = $event->where(array('id'=>$id))->save($data);
		}else{			
			$data['remain'] = $data['amount'];
			$data["create_time"] = time();
			$data["status"] = 0;
			$res = $event->data($data)->add();
		}
		if($res){
			$this->success('更新数据库完成',U('preview'));
		}else{
			$this->error('更新失败，请检查');
		}
	}
}

?>