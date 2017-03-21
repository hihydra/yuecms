<?php
$router->group(['prefix' => 'Cart'],function ($router)
{
	$router->get('/','CartController@index');
	$router->post('ajaxCartUpdateNum/{id}','CartController@ajaxCartUpdateNum')->name('cart.ajaxCartUpdateNum');
	$router->post('ajaxCartDelete/{id}','CartController@ajaxCartDelete')->name('cart.ajaxCartDelete');
});