<?php
namespace Home\Model;


use Think\Model;

class IndexModel
{

    public function User()
    {

    }

    //验证登录
    public function checkLogin($username,$password)
    {
        $data['username']=$username;
        $data['password']=$password;

        $Dao = new Model();

        $sql = "select * from t_member_user where username='$username' AND password='$password'";
        $list = $Dao->query($sql);
        
        if($list){
            $_SESSION['islogin']=1;           //登陆状态存入session
            $_SESSION['username']=$list['username'];  //把用户名存入session
            $_SESSION['id']=$list['id'];   //把用户id存入session

            echo "<script>location.href='index';</script>";

        }else{
            echo "<script>alert('用户名或密码错误!');</script>";
        }
    }

    //用户注册
    public function userRegister($username,$password)
    {
        $data['username']=$username;
        $data['password']=$password;

        $Dao = new Model();

        $sql = "INSERT INTO t_member_user(username, password, chname, enname, time) VALUES('$username','$password','222','222',TIMESTAMP '2017-01-01 00:00:00');";
        $Dao->query($sql);

        echo "<script>alert('注册成功!');</script>";

        echo "<script>location.href='login';</script>";
    }

}