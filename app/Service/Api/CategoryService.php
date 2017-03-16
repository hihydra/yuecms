<?php
namespace App\Service\Api;


//分类相关接口
class CategoryService extends BaseService
{
    //获取分类列表
    public function getCatList(){
        $path  = '/api/shop/goods!catList.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //专题搜索
    public function getGoodsList($storeId=NULL,$catId=NULL,$anchor=NULL,$keyword=NULL){
        $path  = '/api/shop/goods!list.do';
        $query = array('storeId'=>$storeId,'catId'=>$catId,'anchor'=>$anchor,'keyword'=>$keyword);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}