<?php

namespace App\Http\Controllers\Front;
use App\Service\Api\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }


    /**
     * 分类列表

     * @date   2017-02-27T16:19:38+0800
     * @param  [type]                   $id [description]
     * @return [type]                       [description]
     */
    public function show($storeId)
    {
        $catList = $this->service->getCatList();
        $goodsList = $this->service->getGoodsList();
        dd(compact('catList','goodsList'));
        return view('front.category.list')->with($result);
    }

}
