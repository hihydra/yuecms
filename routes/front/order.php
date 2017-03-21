<?php
$router->group(['prefix' => 'order'],function ($router)
{
	$router->get('/','OrderController@index');
	$router->get('{sn}','OrderController@show');
	$router->get('expressInfo/{sn}','OrderController@expressInfo');
	$router->get('shippingType/{regionid}','OrderController@shippingType');
	$router->post('/','OrderController@store');
	$router->post('cancel/{sn}','OrderController@cancel');
	$router->delete('{sn}','OrderController@destroy');
	$router->post('rogConfirm/{sn}','OrderController@rogConfirm');
});