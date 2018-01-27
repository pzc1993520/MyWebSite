<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController Extends Controller{	
	// 添加新数据方法
	public function addData($table){
		$data = M($table)->create();
		$data['create_time'] = time();
		$data['good_thumb'] = $this->file_upload('good_thumb');
		if(M($table)->add($data)){
			$this->success('更新完成',U('Good/preview'));
		}else{
			$this->error('更新失败,请检查');
		}
	}

	//删除数据方法
	public function delData($table,$good_id){
		M($table)->where(array('id'=>$good_id))->delete();
	}

	//修改数据方法
	public function editData($table,$good_id){
		$data = M($table)->create();
		$data['create_time'] = time();
		//如果有文件上传说明要更新图片
		if($_FILES['good_thumb']['error'] == 0){  
			//需要先删除旧图片
			if (file_exists(I('post.old_img'))){
            	unlink(I('post.old_img'));
            }
            if (file_exists(I('post.old_thumb'))) {
            	unlink(I('post.old_thumb'));
            }
	    	$config = array(
				'maxSize'    =>    3*1024*1024,
			    'rootPath'   =>    './',
			    'savePath'   =>    'Public/uploads/',
			    'saveName'   =>	array('uniqid',array('','true')),
			    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
			    'autoSub'    =>    false,
			);
			$upload = new \Think\Upload($config);// 实例化上传类   
			// 上传文件
			$res = $upload->upload();
			if ($res) {
				$data['good_img'] = $config['rootPath'].$res['good_thumb']['savepath'].$res['good_thumb']['savename'];
				//生成缩略图
				$img = new \Think\Image();
		  		$img->open($data['good_img']);
		  		$img->thumb(50,50,\Think\Image::IMAGE_THUMB_FILLED)->save($config['rootPath'].$res['good_thumb']['savepath']."thumb_".$res['good_thumb']['savename']);
		  		$data['good_thumb'] = $config['rootPath'].$res['good_thumb']['savepath']."thumb_".$res['good_thumb']['savename'];
			} else {
				$this->error($upload->getError());
			};
    	};
		if(M($table)->where(array('id'=>$good_id))->save($data)){
			$this->success("更新成功",U('Good/preview'));
		}else{
			$this->error("更新失败,请检查");
		}
	}

	//查询数据方法
	public function searchData($db,$condition,$type,$field=''){
		header("Content-Type:text/html;charset=utf-8");
		if (is_array($type)) {
			$type = $type[0];
		}
		switch ($type) {
			case 'f':
				// 查询符合条件的一条
				return $res = M($db)->where($condition)->find();
				break;
			case 's':
				if ($condition) {
					// 查询符合条件的全部

					return $res = M($db)->where($condition)->select();
				}else{
					// 无条件全部返回
					return $res = M($db)->select();
				};
				break;
			case 'fs':
				// 过滤查询
				return $res = M($db)->field($condition)->select();
				break;
			default:
				return "错误,请传入合法操作条件";
				break;
		}
	}

	// 数据计数方法,可用于统计数据条数进行判断
	public function countData($db,$condition){
		$res = M($db)->where($condition)->count();
		return $res;
	}

	// 登录验证方法--只验证用户名与密码,请结合TP的验证码一起使用
	public function clogin($db,$username,$password){
		if($user = M($db)->where(array('uname'=>$username))->find()){
			if($user['pwd']==md5($password)){
				return ture;
			}else{
				return false;
			};
		}else{
			return false;
		};
		
	}

	// 简单动态URL方法,模板中请使用{:U()}代替###测试方法###
	/**
	*TP内置U()是一种动态生成url的方法,通过字符串方式传递"M/C/A"参数,会动态地自动生成跳转至对应模块下的对应控制器下的对应方法上,而无需每次修改url的地址
	*/
	public function URL($module,$controller,$action){
		return U($module."/".$controller."/".$action);
	}

	//模糊搜索功能函数###待测试###
	// 
	public function shousuo($db,$field,$condition,$type){
		$condition = array("like","%".$condition."%");
		$arr = array(
			$field => $condition,
		);
		$res = M($db)->where($arr)->select();
		if ($res) {
			return $res;
		}else{
			return false;
		}

	}

	//点赞与浏览次数更新
	/*
	*$type默认为增加浏览次数
	**/
	public function zan($db,$id,$data,$type=""){
		switch ($type) {
			case "zan":
				$data = intval(M($db)->where(array('id'=>$id))->getField('zan'));
				$data--;
				$res = M($db)->where(array('id'=>$id))->data(array(
					'zan'=>$data,
				))->save();
				return $res;
				break;
			default:
				$data = intval(M($db)->where(array('id'=>$id))->getField('liulan'));
				$data++;
				$res =M($db)->where(array('id'=>$id))->data(array(
					'liulan'=>$data,
				))->save();
				return $res;
				break;
		}
	}

	//足迹整理
	public function addzuji($db,$uid,$pid){
		// 整理数据
		$data = array(
			'uid' => $uid,
			'pid' => $pid,
			'time' => time(),
		);
		// 整理表
		$tim = time();
		$tag = 30*24*60*60;
		$res = $tim-$tag;
		$map['time']  = array('lt',$res);
		$db = M($db)->where($map)->delete();
		// 添加数据
		if(M($db)->where(array("pid"=>$pid,"uid"=>$uid))->find()){
			$res = M($db)->where(array("pid"=>$pid,"uid"=>$uid))->data($data)->save();
			return $res;
		}else{
			$res = M($db)->data($data)->add();
			return $res;
		}
	}

	//显示足迹###待测试###
	public function showzuji($db,$uid,$pid){
		$res = M($db)->where(array(
			'uid' => $uid,
			'pid' => $pid
		))->select();	
		return $res;
	}

	// 添加收藏方法---添加收藏
	public function addFav($db,$uid,$pid){
		$data = array(
			'uid'=>$uid,
			'pid'=>$pid,
			'time'=>time(),
		);
		// 处理重复收藏问题
		if(M($db)->where(array("pid"=>$pid,"uid"=>$uid))->find()){
			M($db)->where(array("pid"=>$pid,"uid"=>$uid))->data($data)->save();
			return $res;
		}else{
			M($db)->data($data)->add();
			return $res;
		}
	}

	// 取消收藏方法
	public function delFav($db,$uid,$pid){
		$res = M($db)->where(array(
			'uid'=>$uid,
			'pid'=>$pid,
		))->delete();
		return $res;
	}

	// 评论发表
	public function comment($db,$uid,$pid,$content,$youjiid){
		$data=array(
			'uid'=>$uid,
			'pid'=>$pid,
			'content'=>$content,
			'time'=>time(),
			'dianzan'=>0,
			'youjiid'=>$youjiid,
		);
		$res = M($db)->data($data)->add();
		return $res;
	}

	// 评论点赞,点击把对应的评论id传回
	public function Zcomment($db,$id){
		$res = M($db)->where(array(
			'id'=>$id
		))->find();
		$res = array(
			'dianzanshu'=>intval($res['dianzanshu'])+1,
		);
		return M($db)->where(array(
			'id'=>$id
		))->data($res)->save();
	}

	//文件上传的方法
	/*
	*
	**/
    public function file_upload($form){    
    	if($_FILES[$form]['error'] == 0){    		
	    	$config = array(
				'maxSize'    =>    3*1024*1024,
			    'rootPath'   =>    './',
			    'savePath'   =>    '/Public/uploads/',
			    'saveName'   =>	array('uniqid',array('','true')),
			    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
			    'autoSub'    =>    false,
			);
			$upload = new \Think\Upload($config);// 实例化上传类   
			// 上传文件
			$res = $upload->upload();
			if ($res) {
				$local = $config['rootPath'].$res[$form]['savepath'].$res[$form]['savename'];
				//生成缩略图
				$img = new \Think\Image();
		  		$img->open($local);
		  		$img->thumb(50,50,\Think\Image::IMAGE_THUMB_FILLED)->save($config['rootPath'].$res[$form]['savepath']."thumb_".$res[$form]['savename']);
				return $local;
			} else {
				$this->error($upload->getError());
			};
    	}
  	}
  
  	// 短信验证码发送方法
	public function sendsms($phone){
		header('Content-Type:text/html;charset=utf-8');
		session_start();
		$code = rand(100000,999999);
		$data ="您好，您的验证码是" . $code ;
		$_SESSION['code'] = $code;
		$post_data = array();
		$post_data['account'] = "jiekou-clcs-14";
		$post_data['pswd'] = "Hcveu39840";
		$post_data['mobile'] =$phone;
		$post_data['msg']=$data;
		$post_data['needstatus']='true';
		//创蓝接口参数
		$statusStr = array(
			"0" => "短信发送成功",
			"101" => "无此用户",
			"102" => "密码错",
			"105" => "短信内容包含敏感词",
			"106" => "消息长度错",
			"108" => "手机号码个数错",
			"109" => "无发送额度",
			"117" => "IP地址认证错",
			"120" => "短信内容不在白名单中"
		);
		$url='http://222.73.117.156/msg/HttpBatchSendSM?';
		// 打包操作文件
		$post_data=http_build_query($post_data);
		// 初始化curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		// 制定curl请求地址
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		// 向请求地址发送打包数据
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		// 将设置好的curl对象执行,并接收返回结果
		$result = curl_exec($ch) ;
		$res=preg_split("/[,\r\n]/",$result);
		$back = $statusStr[$res[1]];
		return $back;
	}

}
?>