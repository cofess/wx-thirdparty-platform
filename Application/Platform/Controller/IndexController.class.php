<?php
namespace Platform\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->show("<a href='{:U('login')}' >点击登录</a>");
    }

    /**
     * 仪表盘
     * 
     */
    public function dashboard(){
    	$this->display();
    }
    /*
     * 注册页面
     */
    public function signup() {
		$this->display();        
    }	
    
    
    /*
     * 登录页面
     */
    public function login() {
        $this->display();
    }
    /*
     * 注销页面
     */
    public function logout() {
        
        session(null);
        
        redirect(U('index'));
        
    }
}