<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $menu=M('menu');
        $this->assign('data',$menu->select());
        $news=M('news');
        $brief=$news->where('menu_id = 2')->order('created desc')->limit(2)->select();
        $this->assign('brief',$brief);
        $video=$news->where('menu_id = 3')->order('created desc')->limit(1)->select();
        $this->assign('video',$video);
        $this->display();
    }
}