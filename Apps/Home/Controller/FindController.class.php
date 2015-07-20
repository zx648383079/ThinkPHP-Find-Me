<?php
namespace Home\Controller;
use Think\Controller;
class FindController extends Controller {
    public function index(){
        $this->display();
    }
    
    public function search($keyword,$page=0)
    {
        $arr = explode(' ',$keyword);
        foreach($arr as $key=>$a){
            $arr[$key]="%".$a."%";
        }
        $memo['keyword'] =array('like',$arr,'OR');
        
        $memos=M('memos');
        $index=$page*10;
        $data=$memos->where($memo)->order("created desc")->select();
        $this->ajaxReturn($data);
    }
    
    public function add()
    {
        $memo['keyword']=I('post.keyword');
        $memo['content']=I('post.content');
        $memo['created']=date('Y-m-d H:i:s');
        $memos=M('memos');
        $result=$memos->add($memo);
        if($result){
            $data = '发布成功！';
        } else {
            $data='发布失败!';
        }
        $this->ajaxReturn($data);
    }
}