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

    public function is_login(){

    }

	public function http_curl($path,$query,$mothod="GET"){
    	$response = $this->client->request($mothod,$path,['query'=>$query]);
    	if ($response->getStatusCode() == 200) {
    		$body = json_decode($response->getbody());
            switch ($body->result) {
                case '1':
                    return $body->data;
                    break;
                case '2':
                    return redirect('Front.login');
                    break;
                default:
                    return redirect()->back()->withInput()->withErrors($body->message);
                    break;
            }
		}else{
			abort(500);
		}
    }
}