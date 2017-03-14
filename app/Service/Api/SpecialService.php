<?php
namespace App\Service\Api;


//专题与商品相关接口
class SpecialService extends BaseService
{
    //获取专题类型列表
    public function getSpecialTypeList(){
        $path  = '/api/shop/special!typeList.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取专题列表(搜索专题可用此接口)
    public function getSpecialList($anchor=null,$keyword=null,$typeId=null){
        $path  = '/api/shop/special!list.do';
        $query = array('anchor'=>$anchor,'keyword'=>$keyword,'typeId'=>$typeId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //已收藏的专题列表
    public function getSpecialLikeList($anchor=null){
        $path  = '/api/shop/special!likeList.do';
        $query = array('anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //收藏专题
    public function getSpecialLike($specialId){
        $path  = '/api/shop/special!like.do';
        $query = array('specialId'=>$specialId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //取消收藏专题
    public function getSpecialUnlike($specialId){
        $path  = '/api/shop/special!unlike.do';
        $query = array('specialId'=>$specialId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //判断我是否收藏过某商品
    public function getSpecialHasLike($specialId){
        $path  = '/api/shop/special!hasLike.do';
        $query = array('specialId'=>$specialId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //搜索商品
    public function getGoodsList($anchor=null,$keyword=null){
        $path  = '/api/shop/goods!list.do';
        $query = array('anchor'=>$anchor,'keyword'=>$keyword);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //已收藏的商品列表
    public function getGoodsLikeList($anchor=null){
        $path  = '/api/shop/goods!likeList.do';
        $query = array('anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //收藏商品
    public function getGoodsLike($goodsId,$specialId){
        $path  = '/api/shop/goods!like.do';
        $query = array('goodsId'=>$goodsId,'specialId'=>$specialId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //取消收藏商品
    public function getGoodsUnlike($goodsId){
        $path  = '/api/shop/goods!unlike.do';
        $query = array('goodsId'=>$goodsId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //判断我是否收藏过某商品
    public function getGoodsHaslike($goodsId){
        $path  = '/api/shop/goods!hasLike.do';
        $query = array('goodsId'=>$goodsId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}