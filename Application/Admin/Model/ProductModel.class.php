<?php
namespace Admin\Model;

/**
 * Created by IntelliJ IDEA.
 * User: liwei
 * Date: 2017/1/22
 * Time: 13:48
 */
use Think\Controller;

use Think\Model;

class ProductModel
{
    private static $table = 't_course_class';
    private static $product = 't_product';

    //商品管理-教育分类-列表
    public function courseClassList()
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . "";
        return $Dao->query($sql);
    }

    //商品管理-教育分类-一级分类
    public function courseClassC1()
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . " where level=1";
        return $Dao->query($sql);
    }

    //商品管理-教育分类-二级分类
    public function courseClassC2($select1_id)
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . " where fid = ".$select1_id;
        return $Dao->query($sql);
    }

    //商品管理-教育分类-编辑
    public function CourseClassEdit($id)
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . " where id = ".$id;
        return $Dao->query($sql);
    }

    //商品管理-教育分类-编辑 保存
    public function onCourseClassEdit($id,$name,$phase)
    {
        $Dao = new Model();
        $sql = "update " . self::$table . " set name = "."'".$name."'".",phase = "."'".$phase."'"." where id = ".$id;
        $Dao->query($sql);
        return 1;
    }

    //商品管理-教育分类-删除
    public function CourseClassDel($id)
    {
        $Dao = new Model();
        $sql = "delete from " . self::$table . " where id = ".$id;
        $Dao->query($sql);
        return 1;
    }
    
    //商品列表
    public function ProductList()
    {
        $Dao = new Model();
        $sql = "select * from " . self::$product . "";
        return $Dao->query($sql);
    }
}



?>