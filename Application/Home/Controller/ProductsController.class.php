<?php
namespace Home\Controller;
use Home\Model\ProductsModel;
use Think\Controller;
class ProductsController extends Controller
{
//    public function products()
//    {
//        $list = ProductsModel::ProductItem();
//        $this->assign("productItem",$list);
//        var_dump($list);
//        $this->courseClassList=$list;
//        $this->display();
//    }

    //获取单个商品
    public function ProductItem()
    {
        $id = $_GET['id'];
        $proItem = ProductsModel::ProductItem($id);
        $this->assign("productItem",$proItem);
        $this->productItem=$proItem;
        $this->display();
    }
}