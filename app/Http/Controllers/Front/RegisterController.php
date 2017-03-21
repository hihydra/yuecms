<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\UserService;
class RegisterController extends Controller
{
	protected $service;

	public function __construct(UserService $service)
	{
		$this->service = $service;
	}

    //注册首页
    public function index(){
        $resultData = $this->service->getRegionList();
        return view('admin.front.login.index')->with($resultData);
    }

    //注册提交
    public function register_check($request){
    	$resultData = $this->service->getRegister($request->all());
    	return redirect('Front.index');
    }

    //获取验证码
    public function ajaxValidcode($request){
    	$region = $request->get('mobile');
    	$random = md5($region.env('SECRETKRY'));
    	$responseData = $this->service->getRegisterValidcode($mobile,$random);
    	return response()->json($responseData);

    }

    //获取门店列表
    public function ajaxStorefront($request){
    	$region = $request->get('region','');
    	$responseData = $this->service->getStorefrontList($region);
    	return response()->json($responseData);
    }

}