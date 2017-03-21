<?php

namespace App\Http\Controllers\Front;
use App\Service\Order\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index($request){
        $anchor = $request->input('anchor','');
        $status = $request->input('status','');
        $resultData = $this->service->getOrderList($anchor,$status);
        return view('front.order.list')->with($resultData);
    }

    public function show($sn){
        $resultData = $this->service->getOrderDetail($sn);
        return view('front.order.show')->with($resultData);
    }

    public function expressInfo($sn){
        $resultData = $this->service->getOrderExpressInfo($id);
        return view('front.order.expressInfo')->with($resultData);
    }

    public function shippingType($regionid){
        $resultData = $this->service->getShippingType($regionid);
        return view('front.order.shippingType')->with($resultData);
    }

    public function store($request){
        $resultData = $this->service->getOrderCreate($request->all());
        return redirect('front.order.index');
    }

    public function cancel($sn,$request){
        $reason = $request->input('reason');
        $resultData = $this->service->getOrderCreate($sn,$request);
        return redirect('front.order.index');
    }

    public function destroy($sn){
        $this->service->getOrderDelete($sn);
        return redirect('front.address.index');
    }

    public function rogConfirm($sn){
        $this->service->getRogConfirm($sn);
        return redirect('front.address.index');
    }

}
