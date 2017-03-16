<?php
$router->group(['prefix' => 'topical'],function ($router)
{
	$router->get('{storeId}','TopicalController@show');
});