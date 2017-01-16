<?php
namespace Admin\Controller;
use Admin\Model\UserModel;
use Think\Controller;

class UserController extends Controller {

    //用户管理-用户列表
    public function user(){

        $list = UserModel::userList();
        $this->assign("userlist",$list);
        $this->userlist=$list;

        $count = UserModel::userCount();

        $this->usercount=$count[0]['count'];

        $this->display();
    }

    //用户列表-删除
    public function userDel($id)
    {
        $del = UserModel::userDel($id);
        $this->ajaxReturn (json_encode($del),'JSON');
    }

}