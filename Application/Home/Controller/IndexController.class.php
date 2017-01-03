<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    //首页
    public function index()
    {
        $this->show();
    }

    //登录
    public function login()
    {
        $this->display();
    }

    //验证登录
    public function checkLogin()
    {
        if (IS_POST) //登录认证
        {
            $username = I('post.loginname'); //获取用户名
            $password = I('post.nloginpwd'); //获取密码

            $user = new \Home\Model\IndexModel;
            $user->checkLogin($username,$password);
        }
    }

    //注册
    public function register()
    {
        $this->display();
    }

    //用户注册
    public function userRegister()
    {
        if (IS_POST)
        {
            $username = I('post.username');
            $password = I('post.password');

            $user = new \Home\Model\IndexModel;
            $user->userRegister($username,$password);
        }
    }


}