<?php
$router->group(['prefix' => 'category'],function ($router)
{
	$router->get('{storeId}','CategoryController@show');
});