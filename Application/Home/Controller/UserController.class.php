<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	public function index(){
		$this->show();
	}		
	/**
	 * 登录控制器 
	 */
	public function login(){
		$user = M("user");
		$res = $user->where(array(
			"user_name"=>strtolower(I("post.user_name")),
			"user_pwd"=>md5(I("post.user_pwd"))
		))->find();
		if(!is_null($res)){
			$_SESSION['user_id']=$res['id'];
			$_SESSION['user_nickname'] = $res['user_nickname'];
			redirect(U("Index/index"));
		}else{
			redirect(U("User/index"));
		}
	}
	/**
	 * 注册控制器 
	 */
	public function signup(){
		$str = I("post.");
		if(!$this->check_verify($str["sign_verify"])){
			$this->ajaxReturn(array("status"=>200,"target"=>"#sign_verify","name"=>"验证码错误","res"=>FALSE));
		}else{
			$user = M('user');
			if($user->where(array("user_name"=>$str["sign_name"]))->count() >= 1){
				$this->ajaxReturn(array("status"=>200,"target"=>"#sign_name","name"=>"用户名已存在","res"=>FALSE));
			}else {
				if($user->where(array("user_phone"=>$str["sign_phone"]))->count() >= 1){
					$this->ajaxReturn(array("status"=>200,"target"=>"#sign_phone","name"=>"该手机号已被注册","res"=>FALSE));
				}else{
					$id = $user->data(array(
						"user_name"		=>$str["sign_name"],
						"user_pwd"			=>md5($str["sign_pwd"]),
						"user_nickname"=>$str["sign_name"],
						"user_phone"		=>$str["sign_phone"]
					))->add();
					$_SESSION['user_id']=$id;
					$_SESSION['user_nickname'] = $str['sign_name'];
					$this->ajaxReturn(array("status"=>200,"name"=>"注册成功,正在跳转...","res"=>TRUE));
				}
			};
		}
	}
	/**
	 * 注销登陆
	 * */
	public function logout(){
		session(null);
		redirect(U('Index/index'));
	}
	
	public function v_show(){
		$config =    array(
		    'fontSize'    =>    30,    // 验证码字体大小
		    'length'      =>    3,     // 验证码位数
		    'useCurve'   =>  FALSE,
		    'useNoise'    =>   TRUE, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	public function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}
}

?>