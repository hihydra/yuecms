<?php

namespace App\Service\Api;

//主页相关接口
class IndexService extends BaseService
{
    //主页总接口
    public function getIndex($id = null){
        $path  = '/api/shop/storefront!index.do';
        $query = array('id'=>$id);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //掌上门店列表
    public function getOpenList($keyword,$anchor=null,$limit=null){
        $path  = '/api/shop/storefront!openList.do';
        $query = array('keyword'=>$keyword,'anchor'=>$anchor,'limit'=>$limit);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //广告列表
    public function getAdvList($position,$storeId=null){
        $path  = '/api/shop/adv!list.do';
        $query = array('position'=>$position,'storeId'=>$storeId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //今日新书
    public function getNewBook($storeId){
        $path  = '/api/shop/goodsShowcase!newBook.do';
        $query = array('storeId'=>$storeId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //店长推荐
    public function getRecommend($storeId,$anchor=null){
        $path  = '/api/shop/goodsShowcase!recommend.do';
        $query = array('storeId'=>$storeId,'anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //个性推荐
    public function getShowcaseList($storeId,$anchor=null){
        $path  = '/api/shop/goodsShowcase!list.do';
        $query = array('storeId'=>$storeId,'anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //折扣专区
    public function getShowcaseSales($storeId,$anchor=null){
        $path  = '/api/shop/goodsShowcase!sales.do';
        $query = array('storeId'=>$storeId,'anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //专题列表
    public function getListByStore($storeId,$anchor=null,$keyword=null){
        $path  = '/api/shop/special!listByStore.do';
        $query = array('storeId'=>$storeId,'anchor'=>$anchor,'keyword'=>$keyword);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //主题列表
    public function getTopicalList($storeId){
        $path  = '/api/shop/topical!list.do';
        $query = array('storeId'=>$storeId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //主题下的商品列表
    public function getTopicalGoods($storeId,$topicalId,$anchor=null){
        $path  = '/api/shop/topical!goods.do';
        $query = array('storeId'=>$storeId,'topicalId'=>$topicalId,'anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}