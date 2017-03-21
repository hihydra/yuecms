<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\CollectionService;

class CollectionController extends Controller
{
	protected $service;

	public function __construct(UserService $service)
	{
		$this->service = $service;
	}

  //已收藏的专题列表
  public function specialLndex($Request){
     $anchor = $Request->input('anchor');
     $result = $this->service->getSpecialLikeList($anchor);
     return view('front.special.list')->with($result);
  }

  //收藏专题
  public function ajaxSpecialLike($specialId){
    $responseData = $this->service->getSpecialLike($specialId);
    return response()->json($responseData);
  }

  //取消收藏专题
  public function ajaxSpecialUnlike($specialId){
    $responseData = $this->service->getSpecialUnlike($specialId);
    return response()->json($responseData);
  }

  //已收藏的商品列表
  public function goodsLikeList($Request){
     $anchor = $Request->input('anchor');
     $result = $this->service->getGoodsLikeList($anchor);
     return view('front.goodsLike.list')->with($result);
  }

  //收藏商品
  public function ajaxGoodsLike($goodsId,$specialId){
    $responseData = $this->service->getGoodsLike($goodsId,$specialId);
    return response()->json($responseData);
  }

  //取消收藏商品
  public function ajaxGoodsUnlike($goodsId){
    $responseData = $this->service->getGoodsUnlike($goodsId);
    return response()->json($responseData);
  }

}