<?php
namespace Admin\Controller;
use Think\Controller;
class LogoutController extends Controller {
    public function index(){
        session('user',null);
        //重定向到指定的URL地址
        redirect('login', 2, '账号已退出,页面跳转中...');
    }
}