<?php
namespace Home\Model;


use Think\Model;

class ProductsModel
{

    private static $table = 't_product';

    //商品列表
    public function ProductList()
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . "";
        return $Dao->query($sql);
    }

    //商品单个
    public function ProductItem($id)
    {
        $Dao = new Model();
        $sql = "select * from " . self::$table . " where id = ".$id."";
        return $Dao->query($sql);
    }
}