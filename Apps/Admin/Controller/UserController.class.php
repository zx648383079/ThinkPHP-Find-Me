<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $users=M('users');
        $user=$users->where('id = '.$user_id)->find();
        $this->assign('user',$user);
        $this->display();
    }
    
    public function edit(){
        $user_id=session('user');
        if(empty($user_id)){
            
            //重定向到指定的URL地址
            redirect('admin.php/login');
        }
        $user['name']=I('post.name','');
        if($user['name']=='')
        {
            $this->error('修改失败，用户名不能为空');
        }
        //$file=$_POST['file'];
        if(!empty($_FILES))
        {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath =       'Public/';
            $upload->savePath =       'images/';
            $upload->saveName = 'time';
            // 上传单个文件 
            $info   =   $upload->uploadOne($_FILES['photo']);
            if($info)
            {
                var_dump($info);
                $file='Public/'.$info['savepath'].$info['savename'];
                //缩小
                $image = new \Think\Image(); 
                $image->open($file);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(200, 200)->save($file);
                $user['photo']='/'.$file;
            }else{
                $this->error($upload->getError());
            }
        }
        $users=M('users');
        $result=$users->where('id='.$user_id)->save($user); // 根据条件更新记录
        if($result){
           //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('修改成功');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('修改失败');
        }
    }
}