<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $user=M('users');
        $result=$user->find($user_id);
        $this->assign('user',$result);
        $this->display();
    }
}