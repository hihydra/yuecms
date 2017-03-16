<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Api\IndexService;
class IndexController extends Controller
{
	protected $service;

	public function __construct(IndexService $service)
	{
		$this->service = $service;
	}

    public function index()
    {
    	$data = $this->service->getIndex();
        dd($data);
    	return view('front.index.blog')->with(compact('datas'));
    }

    public function search()
    {
        $result = $this->service->search(request('q',''));
        if ($result) {
            return view('front.index.search')->with($result);
        }
        return redirect('/');
    }
}