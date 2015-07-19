<?php
namespace Admin\Controller;
use Think\Controller;
class MessagesController extends Controller {
    public function index(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $messages=M('messages');
        $message=$messages->order('created desc')->select();
        $this->assign('data',$message);
        $this->display();
    }
    
    public function add(){
        $message['name']=I('post.name');
        $message['email']=I('post.email');
        $message['kind']=I('post.kind');
        $message['message']=I('post.message');
        $message['isread']=0;
        $message['ip']=get_client_ip();
        $message['created']=date('Y-m-d H:i:s');
        $messages=M('messages');
        $result=$messages->add($message);
        if($result){
           //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('提交成功，稍后我们会与您取得联系！');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('提交失败！');
        }
    }
    
    public function read($id){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $messages=M('messages');
        // 要修改的数据对象属性赋值
        $data['isread'] = 1;
        $messages->where('id='.$id)->save($data); // 根据条件更新记录
        $this->success('第'.$id.'条消息已阅读！');
        
    }
}