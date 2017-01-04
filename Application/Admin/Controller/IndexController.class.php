<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    //验证登录
    public function adminLogin()
    {
        if (IS_POST) //登录认证
        {
            $username = I('post.username'); //获取用户名
            $password = I('post.password'); //获取密码

            $user = new \Admin\Model\IndexModel;
            $user->adminLogin($username,$password);
        }
    }

}