<?php
$router->group(['prefix' => 'address'],function ($router)
{
	$router->get('defaddr/{id}','AddressController@defaddr');
});
$router->resource('address','AddressController');