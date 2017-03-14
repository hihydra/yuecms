<?php
namespace App\Service\Api;


//登陆相关接口
class LoginService extends BaseService
{
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

}