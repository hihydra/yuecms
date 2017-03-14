<?php
namespace App\Service\Api;

//订单相关接口
class OrderService extends BaseService
{
    //获取订单列表
    public function getOrderList($anchor = null,$status = null){
        $path  = '/api/shop/order!list.do';
        $query = array('anchor'=>$anchor,'status'=>$status);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取订单详情
    public function getOrderDetail($sn){
        $path  = '/api/shop/order!detail.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取物流信息
    public function getOrderExpressInfo($sn){
        $path  = '/api/shop/order!expressInfo.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取配送方式
    public function getShippingType($regionid){
        $path  = '/api/shop/checkout!getShippingType.do';
        $query = array('regionid'=>$regionid);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //生成订单
    public function getOrderCreate($form){
        $path  = '/api/shop/order!create.do';
        $query = $form;
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //取消订单（只能取消未付款的订单）
    public function getOrderCancel($sn,$reason){
        $path  = '/api/shop/order!cancel.do';
        $query = array('sn'=>$sn,'reason'=>$reason);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //删除订单（只能删除已取消与已完成的订单）
    public function getOrderDelete($sn){
        $path  = '/api/shop/order!delete.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取支付宝相关参数
    public function getZhiFuBao($sn){
        $path  = '/api/shop/payment!zhiFuBao.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取微信支付相关参数
    public function getWeiXin($sn){
        $path  = '/api/shop/payment!weiXin.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取订单中待评价商品列表
    public function getWaitCommentGoods($orderId){
        $path  = '/api/shop/comment!waitCommentGoods.do';
        $query = array('orderId'=>$orderId);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //已购商品评价
    public function getCommentAdd($form){
        $path  = '/api/shop/comment!add.do';
        $query = $form;
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //确定收货
    public function getRogConfirm($sn){
        $path  = '/api/shop/order!rogConfirm.do';
        $query = array('sn'=>$sn);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //查询运费
    public function getFreight($paramData){
        $path  = '/api/shop/order!getFreight.do';
        $query = array('paramData'=>$paramData);
        $data = $this->http_curl($path,$query);
        return $data;
    }

}