<?php
namespace Home\Controller;
use Home\Model\ProductsModel;
use Think\Controller;
class AllclassController extends Controller
{

    public function allclass(){
        //获取商品列表
        $productlist = ProductsModel::ProductList();
        $this->assign("productList",$productlist);
        $this->productList=$productlist;
        $this->display();
    }
}