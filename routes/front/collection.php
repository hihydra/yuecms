<?php
$router->group(['prefix' => 'Collection'],function ($router)
{
	$router->get('specialLndex','CollectionController@specialLndex');
	$router->get('goodsLikeList','CollectionController@goodsLikeList');
	$router->post('ajaxSpecialLike/{specialId}','Collection@ajaxCartUpdateNum')->name('Collection.ajaxSpecialLike');
	$router->post('ajaxSpecialUnlike/{specialId}','Collection@ajaxSpecialUnlike')->name('Collection.ajaxSpecialUnlike');
	$router->post('ajaxGoodsLike/{goodsId}/{specialId}','Collection@ajaxGoodsLike')->name('Collection.ajaxGoodsLike');
	$router->post('ajaxGoodsUnlike/{specialId}','Collection@ajaxGoodsUnlike')->name('Collection.ajaxGoodsUnlike');
});