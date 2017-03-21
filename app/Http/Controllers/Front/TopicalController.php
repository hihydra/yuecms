<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\IndexService;
class TopicalController extends Controller
{
	protected $service;

	public function __construct(IndexService $service)
	{
		$this->service = $service;
	}

    public function show($storeId)
    {
    	$resultData = $this->service->getTopicalList($storeId);
    	return view('front.topical.show')->with($resultData);
    }
}