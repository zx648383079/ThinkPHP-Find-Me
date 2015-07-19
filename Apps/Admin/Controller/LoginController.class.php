<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $user_id=session('user');
        if(!empty($user_id)){
            //重定向到指定的URL地址
            redirect('/admin.php');
        }
        $this->display();
    }
    
    public function postlogin()
    {
        $code=I('post.verify');
        $verify = new \Think\Verify();
        if(!$verify->check($code, '')){
            $this->error('验证码错误！');
        }
        
        $user_info['email']=I('post.email');
        $user_info['pwd']=md5(I('post.pwd'));
        $User = M('Users'); //实例化User对象
        $result = $User->where($user_info)->find(); 
        if(!empty($result)){
            session('user',$result['id']);
            
           //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('登录成功', '/admin.php');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('登录失败');
        }
    }
    
    public function register(){
        $user_id=session('user');
        if(!empty($user_id)){
            //重定向到指定的URL地址
            redirect('/admin.php');
        }
        $this->display('register');
    }
    
    public function postregister(){
        $name=I('post.name');
        $email=I('post.email');
        $pwd=I('post.pwd');
        $confirmpwd=I('post.confirmpwd');
        if($pwd!= $confirmpwd){
            $this->error('密码不一致！');
        }
        $user_info['email']=$email;
        $user=M('Users');
        $result = $user->where($user_info)->find(); 
        if(!empty($result)){
            $this->error('邮箱已被注册！');
        }
        $user_info['name']=$name;
        
        $user_info['pwd']=md5($pwd);
        $user_info['created']=date('Y-m-d H:i:s');
        
        $result=$user->add($user_info);
        if($result){
            session('user',$result['id']);
           //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('注册成功', '/admin.php');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('注册失败');
        }
    }
    //生成验证码
    public function Verify(){
            $Verify = new \Think\Verify();
            $Verify->entry();
    }
}