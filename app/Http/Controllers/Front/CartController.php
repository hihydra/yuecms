<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\CartService;

class CartController extends Controller
{
    protected $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $result = $this->service->getCartList();
        return view('front.cart.list')->with($result);
    }

    public function ajaxCartUpdateNum($request,$id)
    {
        $num = $request->input('num');
        $responseData = $this->service->getCartUpdateNum($id,$num);
        return response()->json($responseData);
    }

    public function ajaxCartDelete($id)
    {
        $responseData = $this->service->getCartDelete($id);
        return response()->json($responseData);
    }
}
