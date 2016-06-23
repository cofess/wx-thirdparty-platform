<?php
namespace Platform\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function index(){

    }

    /*
     * 初始化参数
     */    
    public function _initialize(){
        //加载资源路径
        $this->assign('resource_basic',C("resource_basic"));

        $this->initial_nav_title(CONTROLLER_NAME, CONTROLLER_NAME."_".ACTION_NAME);       

    }
    
    
    /*
     * 初始化菜单 和 标题和小标题
     * initial_nav_title
     */
    public function initial_nav_title($first_nav="第一导航",$second_nav="第二导航") {
        
        if(!empty(C("$first_nav")))
        {
            $this->assign("first_nav",C("$first_nav"));
        }
        else
        {
            $this->assign("first_nav",$first_nav);
        }
        
        
        if(!empty(C("$second_nav")))
        {
            $this->assign("second_nav",C("$second_nav"));
        }
        else
        {
            $this->assign("second_nav",$second_nav);
        }
            
    }
}