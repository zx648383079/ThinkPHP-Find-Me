<?php
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
    public function index(){
        $user_id=session('user');
        if(empty($user_id)){
            $data['status']  = 0;
            $data['content'] = '请先登录！';
            $this->ajaxReturn($data);
        }
        
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      '/Public/images/'; // 设置附件上传根目录
        // 上传单个文件 
        $info   =   $upload->uploadOne($_FILES['photo1']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
             echo $info['savepath'].$info['savename'];
        }
    }
}