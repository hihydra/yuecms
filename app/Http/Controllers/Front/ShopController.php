<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\IndexService;

class ShopController extends Controller
{
	protected $service;

	public function __construct(IndexService $service)
	{
		$this->service = $service;
	}

    //掌上门店列表
    public function openList($request)
    {
        $keyword =$request->input('keyword');
        $anchor =$request->input('anchor','');
    	$resultData = $this->service->getOpenList($keyword,$anchor);
    	return view('front.index.index')->with($resultData);
    }

    //广告列表
    public function advList($request)
    {
        $position =$request->input('position');
        $storeId =$request->input('storeId','');
        $resultData = $this->service->getAdvList($position,$storeId);
        return view('front.index.index')->with($resultData);
    }

    //今日新书
    public function newBook($request)
    {
        $storeId =$request->input('storeId');
        $resultData = $this->service->getNewBook($storeId);
        return view('front.index.index')->with($resultData);
    }

    //店长推荐
    public function recommend($request)
    {
        $storeId =$request->input('storeId');
        $anchor =$request->input('anchor','');
        $resultData = $this->service->getRecommend($storeId,$anchor=null);
        return view('front.index.index')->with($resultData);
    }

    //个性推荐
    public function showcaseList($request)
    {
        $storeId =$request->input('storeId');
        $anchor =$request->input('anchor','');
        $resultData = $this->service->getShowcaseList($storeId,$anchor);
        return view('front.index.index')->with($resultData);
    }

    //折扣专区
    public function showcaseSales($request)
    {
        $storeId =$request->input('storeId');
        $anchor =$request->input('anchor','');
        $resultData = $this->service->getShowcaseSales($storeId,$anchor);
        return view('front.index.index')->with($resultData);
    }

    //专题列表
    public function listByStore($request)
    {
        $storeId =$request->input('storeId');
        $anchor =$request->input('anchor','');
        $keyword =$request->input('keyword','');
        $resultData = $this->service->getListByStore($storeId,$anchor,$keyword);
        return view('front.index.index')->with($resultData);
    }

    //主题列表
    public function showcaseList($request)
    {
        $storeId =$request->input('storeId');
        $resultData = $this->service->getTopicalList($storeId);
        return view('front.index.index')->with($resultData);
    }

    //主题下的商品列表
    public function topicalGoods($request)
    {
        $storeId =$request->input('storeId');
        $topicalId =$request->input('topicalId');
        $anchor =$request->input('anchor','');
        $resultData = $this->service->getTopicalGoods($storeId,$topicalId,$anchor);
        return view('front.index.index')->with($resultData);
    }


}