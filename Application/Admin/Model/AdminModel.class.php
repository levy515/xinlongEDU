<?php
namespace Admin\Model;

/**
 * Created by IntelliJ IDEA.
 * User: liwei
 * Date: 2017/1/4
 * Time: 22:19
 */

use Think\Model;

class AdminModel
{
    //后台登录
    public function adminLogin($username,$password)
    {
        $data['username']=$username;
        $data['password']=$password;

        $Dao = new Model();

        $sql = "select * from t_admin_user where username='$username' AND password='$password'";
        $list = $Dao->query($sql);

        if($list){
            $_SESSION['islogin']=1;           //登陆状态存入session
            $_SESSION['username']=$list['username'];  //把用户名存入session
            $_SESSION['id']=$list['id'];   //把用户id存入session

            echo "<script>alert('成功!');</script>";

            echo "<script>location.href='index';</script>";

        }else{
            echo "<script>alert('用户名或密码错误!');</script>";
        }
    }
}



?>