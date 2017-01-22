<?php
namespace Admin\Model;

/**
 * Created by IntelliJ IDEA.
 * User: liwei
 * Date: 2017/1/4
 * Time: 22:19
 */
use Think\Controller;

use Think\Model;

class UserModel
{
    private static $table = 't_admin_user';

    //用户列表
    public function userList()
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . "";
        return $Dao->query($sql);
    }

    //用户列表总数
    public function userCount()
    {
        $Dao = new Model();
        $sql = "select count(*) from " . self::$table . "";
        return $Dao->query($sql);
    }

    //用户列表增加保存
    public function onUserAdd($username,$password,$name,$sex,$tel,$mail)
    {
        $Dao = new Model();
        if($sex == 1)
        {
            $sex = true;
        }elseif ($sex == 0){
            $sex = false;
        }
        
        $sql = "INSERT INTO " . self::$table . "(username, password, name, sex, tel, mail)
				VALUES('$username','$password','$name','$sex','$tel','$mail')";
        $Dao->query($sql);
        return 1;
    }

    //用户列表删除
    public function userDel($id)
    {
        $Dao = new Model();
        $sql = "delete from " . self::$table . " where id = ".$id;
        $Dao->query($sql);
        return 1;
    }

    //用户列表编辑
    public function userEdit($id)
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . " where id = ".$id;
        return $Dao->query($sql);
    }

    //用户列表编辑保存
    public function onUserEdit($id,$username,$password,$name,$sex,$tel,$mail)
    {
        $Dao = new Model();
        $sql = "update " . self::$table . " set username = "."'".$username."'".",password = "."'".$password."'".",name = "."'".$name."'".",sex = "."'".$sex."'".",tel = "."'".$tel."'".",mail = "."'".$mail."'"." where id = ".$id;
        $Dao->query($sql);
        return 1;
    }
}



?>