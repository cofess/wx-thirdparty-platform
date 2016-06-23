<?php
namespace Platform\Controller;

use Think\Controller;

class WebsiteController extends CommonController{

    public function index(){

    }

    public function chosen_menu_template(){
        // echo I('post.menu-id');
    	// echo I('post.templateType');
    	// exit();
        $id=I('post.menu-id');
    	$templateType=I('post.templateType');
    	if($templateType==1){
    		$this->redirect('Platform/Website/single-page',array('menu' => $id));//单页面模版
    	}elseif ($templateType==2) {
    		$this->redirect('Platform/Website/list-page',array('menu' => $id));//列表页模版
    	}elseif ($templateType==3) {
    		$this->redirect('Platform/Website/product-page',array('menu' => $id));//产品模版
    	}elseif ($templateType==4) {
    		$this->redirect('Platform/Website/auth-page',array('menu' => $id));//注册与绑定模版
    	}elseif ($templateType==5) {
    		$this->redirect('Platform/Website/book-page',array('menu' => $id));//在线预约页面
    	}elseif ($templateType==6) {
    		$this->redirect('Platform/Website/site-home-page',array('menu' => $id));//微网首页模版
    	}elseif ($templateType==7) {
    		$this->redirect('Platform/Website/roadshow-page',array('menu' => $id));//产品路演预约模版配置
    	}else {
    		$this->redirect('Platform/Website/activity-page',array('menu' => $id));//活动预约模版配置
    	}
    	//$this->display();   	
    }
}