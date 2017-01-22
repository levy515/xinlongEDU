<?php
namespace Admin\Controller;
use Admin\Model\UserModel;
use Think\Controller;

class UserController extends Controller {

    //用户管理-用户列表
    public function user()
    {
        $list = UserModel::userList();
        $this->assign("userlist",$list);
        $this->userlist=$list;

        $count = UserModel::userCount();

        $this->usercount=$count[0]['count'];

        $this->display();
    }

    //用户列表-增加
    public function userAdd()
    {
        $this->display();
    }

    //用户列表-增加（保存）
    public function onUserAdd()
    {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $name = $_GET['name'];
        $sex = $_GET['sex'];
        $tel = $_GET['tel'];
        $mail = $_GET['mail'];

        $onUserEdit = UserModel::onUserAdd($username,$password,$name,$sex,$tel,$mail);
        $this->ajaxReturn(json_encode($onUserEdit),'json');
    }

    //用户列表-删除
    public function userDel($id)
    {
        $del = UserModel::userDel($id);
        $this->ajaxReturn (json_encode($del),'JSON');
    }

    //用户列表-编辑
    public function userEdit()
    {
        $id = $_GET['id'];
        $editList = UserModel::userEdit($id);
        $this->assign("userlist",$editList);
        $this->userlist=$editList;
        $this->display();
    }

    //用户列表-编辑（保存）
    public function onUserEdit()
    {
        $id = $_GET['id'];
        $username = $_GET['username'];
        $password = $_GET['password'];
        $name = $_GET['name'];
        $sex = $_GET['sex'];
        $tel = $_GET['tel'];
        $mail = $_GET['mail'];

        $onUserEdit = UserModel::onUserEdit($id,$username,$password,$name,$sex,$tel,$mail);
        $this->ajaxReturn(json_encode($onUserEdit),'json');
    }

}