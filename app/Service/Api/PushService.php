<?php
namespace App\Service\Api;


//消息中心
class PushService extends BaseService
{

    //消息中心列表接口
    public function getMemberMsg(){
        $path  = '/api/shop/memberMsg!load.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取物流通知消息列表
    public function getLogiList($anchor){
        $path  = '/api/shop/push!getLogiList.do';
        $query = array('anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //删除物流通知消息
    public function getDelLogi($id){
        $path  = '/api/shop/push!delLogi.do';
        $query = array('id'=>$id);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取系统消息列表
    public function getMsgList($anchor){
        $path  = '/api/shop/msg!list.do';
        $query = array('anchor'=>$anchor);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //删除系统消息
    public function getMsgDel($id){
        $path  = '/api/shop/msg!del.do';
        $query = array('id'=>$id);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //清空系统消息
    public function getMsgClear(){
        $path  = '/api/shop/msg!clear.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

}