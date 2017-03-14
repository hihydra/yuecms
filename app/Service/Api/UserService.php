<?php
namespace App\Service\Api;


//用户相关接口
class UserService extends BaseService
{

    //获取注册验证码接口
    public function getRegisterValidcode($mobile,$random){
        $path  = '/api/shop/account!getRegisterValidcode.do';
        $query = array('mobile'=>$mobile,'random'=>$random);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //验证手机验证码
    public function checkValidcode($mobile,$validcode){
        $path  = '/api/shop/account!checkValidcode.do';
        $query = array('mobile'=>$mobile,'validcode'=>$validcode);
        $data = $this->http_curl($path,$query);
        return $data;
    }

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

    //登录接口
    public function getLogin($mobile,$password){
        $path  = '/api/shop/account!login.do';
        $query = array('mobile'=>$mobile,'password'=>$password);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //登录接口
    public function getLogin($mobile,$password){
        $path  = '/api/shop/account!login.do';
        $query = array('mobile'=>$mobile,'password'=>$password);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //修改密码
    public function getChangePassword($oldpassword,$newpassword){
        $path  = '/api/shop/account!changePassword.do';
        $query = array('oldpassword'=>$oldpassword,'newpassword'=>$newpassword);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //密码找回验证码获取接口
    public function getValidcodeByMobile($mobile){
        $path  = '/api/shop/account!getValidcodeByMobile.do';
        $query = array('mobile'=>$mobile);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //密码找回密码重置接口
    public function getResetPassword($mobile,$password,$validcode){
        $path  = '/api/shop/account!resetPassword.do';
        $query = array('mobile'=>$mobile,'password'=>$password,'validcode'=>$validcode);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //手机号修改接口(获取旧手机验证码)
    public function getValidcode(){
        $path  = '/api/shop/account!getValidcode.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //手机号修改接口(修改手机号)
    public function getChangeMobile($mobile,$validcode){
        $path  = '/api/shop/account!changeMobile.do';
        $query = array('mobile'=>$mobile,'validcode'=>$validcode);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取用户信息
    public function getInfo(){
        $path  = '/api/shop/personInfo!getInfo.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //修改用户信息
    public function getSaveInfo($nickname,$sex,$storeId,$birthday){
        $path  = '/api/shop/personInfo!saveInfo.do';
        $query = array('nickname'=>$nickname,'sex'=>$sex,'storeId'=>$storeId,'birthday'=>$birthday);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //设置用户头像
    public function getSetPic($file){
        $path  = '/api/shop/personInfo!setPic.do';
        $query = array('file'=>$file);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //获取收货地址列表
    public function getAddressList(){
        $path  = '/api/shop/address!list.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //添加收货地址
    public function getAddressList($from){
        $path  = '/api/shop/address!add.do';
        $query = $from;
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //修改收货地址
    public function getAddressEdit($from){
        $path  = '/api/shop/address!edit.do';
        $query = $from;
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //删除收货地址
    public function getAddressDelete($id){
        $path  = '/api/shop/address!delete.do';
        $query = array('id'=>$id);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //设置默认收货地址
    public function getAddressDefaddr($id){
        $path  = '/api/shop/address!defaddr.do';
        $query = array('id'=>$id);
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //不注册直接登录
    public function getDirectLogin(){
        $path  = '/api/shop/account!directLogin.do';
        $query = array();
        $data = $this->http_curl($path,$query);
        return $data;
    }

    //意见反馈
    public function getDirectLogin($mobile,$content){
        $path  = '/api/shop/suggest!save.do';
        $query = array('mobile'=>$mobile,'content'=>$content);
        $data = $this->http_curl($path,$query);
        return $data;
    }
}