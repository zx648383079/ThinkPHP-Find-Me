<?php
namespace Admin\Controller;
use Think\Controller;
class VideosController extends Controller {
    public function index(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $news=M('news');
        $brief=$news->where('menu_id = 3')->order('created desc')->select();
        $this->assign('data',$brief);
        $this->display();
    }
    
    public function add(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $new['menu_id']=3;
        $new['content']=I('post.content','',false);
        $new['created']=date('Y-m-d H:i:s');
        $news=M('news');
        $result=$news->add($new);
        if($result){
           //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('发表成功');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('发表失败');
        }
    }
}