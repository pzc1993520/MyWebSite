<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {	
	public function index(){
		if(I('get.error') == 1){
			$this->assign("error","用户名或密码错误");
		}
		$this->show();
	}
	public function login(){
		$res = M("user")->where(array(
			"user_name"=>strtolower(I('post.user_name')),
			"user_pwd"=>md5(I('post.user_pwd')),
		))->find();
		if(!empty($res) & $res['user_rank'] == 9){
			$_SESSION["admin_id"] = $res['id'];
			$_SESSION["admin_name"] = $res["user_nickname"];
			$_SESSION["admin_thumb"] = $res["user_thumb"];
			$_SESSION["admin_rank"] = $res["user_rank"];
			$this->redirect("Admin/Index/index");
		}else{
			$this->redirect("index",array('error'=>"1"));
		}
	}
}