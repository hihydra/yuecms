<?php
namespace App\Service\Api;
/**
* 基类service
*/
class BaseService
{
	public function __construct(){
        $this->url = env('API_URL');
		$this->client = new \GuzzleHttp\Client(['base_uri' => env('API_URL')]);  //api接口地址
	}

	public function http_curl($path,$query,$mothod="GET"){
    	$response = $this->client->request($mothod,$path,['query'=>$query]);
    	if ($response->getStatusCode() == 200) {
    		$body = json_decode($response->getbody(),true);
    		if ($body['result'] == 1) {

    		}else if($body['result'] == 2){

    		}else{
    			abort(500,$body['message']);
    		}
		}else{
			abort(500);
		}
    }
}