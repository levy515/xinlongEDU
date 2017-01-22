<?php
namespace Admin\Controller;
use Admin\Model\ProductModel;
use Think\Controller;

class ProductController extends Controller {

    //商品管理-课程分类
    public function CourseClass()
    {
        $list = ProductModel::courseClassList();
        $this->assign("courseClassList",$list);
        $this->courseClassList=$list;
        $this->display();
    }

    //商品管理-课程分类-编辑
    public function CourseClassEdit()
    {
        $id = $_GET['id'];
        $editList = ProductModel::CourseClassEdit($id);
        $this->assign("courseClassList",$editList);
        $this->courseClassList=$editList;
        $this->display();
    }

    //商品管理-课程分类-编辑（保存）
    public function onCourseClassEdit()
    {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $phase = $_GET['phase'];

        $onUserEdit = ProductModel::onCourseClassEdit($id,$name,$phase);
        $this->ajaxReturn(json_encode($onUserEdit),'json');
    }

    //商品管理-课程分类-删除
    public function CourseClassDel($id)
    {
        $del = ProductModel::CourseClassDel($id);
        $this->ajaxReturn (json_encode($del),'JSON');
    }

}