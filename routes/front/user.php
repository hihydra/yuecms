<?php
$router->group(['prefix' => 'user'],function ($router)
{
	$router->get('ajaxSetPic','UserController@ajaxSetPic')->name('user.ajaxSetPic');
	$router->get('suggest','UserController@suggest')->name('user.suggest');
	$router->post('ajaxSuggestSave','UserController@ajaxSuggestSave')->name('user.ajaxSuggestSave');
});
$router->resource('user','UserController');