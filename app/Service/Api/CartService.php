<?php

namespace App\Service\Api;

//购物车相关接口
class CartService extends BaseService
{
    //获取购物车商品列表
    public function getCartList(){
        $path  = '/api/shop/cart!list.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取购物车商品数量
    public function getCartCount(){
        $path  = '/api/shop/cart!count.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //添加商品到购物车
    public function getCartAdd($id,$num,$storeId,$specialId){
        $path  = '/api/shop/cart!add.do';
        $query = array('id'=>$id,'num'=>$num,'storeId'=>$storeId,'specialId'=>$specialId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //修改购物车商品数量
    public function getCartUpdateNum($id,$num){
        $path  = '/api/shop/cart!updateNum.do';
        $query = array('id'=>$id,'num'=>$num);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //删除购物车商品
    public function getCartDelete($cartIds){
        $path  = '/api/shop/cart!delete.do';
        $query = array('cartIds'=>$cartIds);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}