<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {	
    public function _initialize(){
    	if(is_null($_SESSION['admin_id'])){
    		$this->redirect('Login/index');
    	}
    }
    public function index(){
    	var_dump($_SESSION);
        $this->show();
    }
     public function info(){
     	$goods = M("goods")->limit(5)->select();
		$this->assign("goods",$goods);
		$this->show();
    }
}