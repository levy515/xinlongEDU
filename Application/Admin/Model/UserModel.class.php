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

    //用户列表删除
    public function userDel($id)
    {
        $Dao = new Model();
        $sql = "delete from " . self::$table . " where id = ".$id;
        $Dao->query($sql);
        return 1;
    }
}



?>