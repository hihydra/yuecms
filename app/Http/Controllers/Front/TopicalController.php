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
    	$data = $this->service->getTopicalList($storeId);
        dd($data);
    	return view('front.index.blog')->with(compact('datas'));
    }
}