<?php
return [
	// 自定义登录字段
	'username' 	=> 'username',
	// 重置用户密码
	'reset' 	=> '123456',
	// 分页
	'list' => [
		'start'=> 0,
		'length' => 10,
	],
	'paginate' => 1,
	/**
	 * 全局状态
	 * active 	正常
	 * ban 		禁用
	 * addit 	待审核
	 * trash	回收站
	 * destory 	彻底删除
	 */
	'status' => [
		'active' => 1,
		'ban' => 2,
		'audit' => 3,
		'trash' => 99,
		'destory' => -1
	],
	'permission' => [
		// 控制是否显示查看按钮
		'show' => false,
	],
	'role' => [
		// 控制是否显示查看按钮
		'show' => true,
	],
	'user' => [
		// 控制是否显示查看按钮
		'show' => true,
	],
	'tag' => [
		// 控制是否显示查看按钮
		'show' => false,
	],
	'article' => [
		// 控制是否显示查看按钮
		'show' => true,
	],
	'encrypt' => [
		'main' 		=> false,
		'article'	=> true,
		'link'		=> true,
		'category'	=> true,
		'tag'		=> true,

	],
	// 缓存
	'cache' => [
		'menuList' => 'menuList',// 后台菜单缓存
		'categoryList' => 'categoryList',// 前端分类缓存
		'link' => 'link',// 友情链接缓存
	],
	'redis' => [
		'zset' => 'trending_articles',
		'hash' => 'article.',
	],
	'imagePath' => '/uploads/',
	'blog' => 'blog.system',
	//网站设置
	'setting' => [
		'title' => '',
		'keywords' => '',
		'description' => '',
		'author' => '',
		'about_title' => '',
		'about_en_title' => '',
		'about_content' => '',
		// 联系我们
		'contact_us' => '',
		// 联系邮箱
		'contact_email' => '',
		//网站logo
		'logo'=> '',
		//下载APP
		'download_app' => '',
		// 支付宝赞助
		'sponsor_alipay' => '',
		// 微信赞助
		'sponsor_wechat' => '',
		// 版权
		'copyright' => '',
		// 统计代码
		'statistics' => '',
		// 第三方评论，为空时启用网站自带评论
		'comment' => '',
		// 分享代码
		'share' => '',
	],
];