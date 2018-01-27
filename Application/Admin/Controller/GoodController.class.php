<?php
namespace Admin\Controller;
use Think\Controller;
class GoodController extends Controller{
	public function preview(){
		$count      = M("goods")->count();
		$Page       = new \Think\Page($count,15);
		$show       = $Page->show();		
		$list = M("goods")->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign(array(
			"list"=>$list,
			"page"=>$show
		));
		$this->show();
	}
	public function modify(){
		($id = I("get.good_id"))?$status = TRUE:$status = FALSE;
		if ($status) {
			//修改商品
			$res = M("goods")->where(array("id"=>$id))->find();
			$this->assign(array(
				"good_id"=>$id,
				"res"=>$res
			));
		}
		$this->show();
	}
}

?>