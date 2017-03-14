<?php
namespace App\Service\Api;


//注册相关接口
class RegisterService extends BaseService
{

    //获取区域列表
    public function getRegionList($pid){
        $path  = '/api/shop/region!list.do';
        $query = array('pid'=>$pid);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取门店列表
    public function getStorefrontList($region){
        $path  = '/api/shop/storefront!list.do';
        $query = array('region'=>$region);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //提交注册
    public function getRegister($mobile,$nickname,$password,$validcode,$storeId){
        $path  = '/api/shop/account!register.do';
        $query = array('mobile'=>$mobile,'nickname'=>$nickname,'password'=>$password,'validcode'=>$validcode,'storeId'=>$storeId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}