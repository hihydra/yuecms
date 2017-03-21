<?php
namespace App\Service\Admin;

use App\Traits\SendSystemErrorTrait;
use Exception,Settings;
use App\Traits\UploadTrait;
/**
* 网站设置service
*/
class SettingService
{
	use SendSystemErrorTrait,UploadTrait;

	public function index()
	{
		return Settings::has(config('admin.global.blog')) ? settings(config('admin.global.blog')) : config('admin.global.setting');
	}

	public function storeSetting($request)
	{
		try {
			$attributes = $request->except('_token');
			$settings = settings(config('admin.global.blog'),[]);
			// 网站logo
			if ($request->hasFile('logo')) {
				$attributes['logo'] = $this->uploadImage($request->file('logo'));
			}else{
				$attributes['logo']= isset($settings['logo']) ? $settings['logo']:'';
			}
			// 下载APP
			if ($request->hasFile('download_app')) {
				$attributes['download_app'] = $this->uploadImage($request->file('download_app'));
			}else{
				$attributes['download_app']= isset($settings['download_app']) ? $settings['download_app']:'';
			}
			settings([config('admin.global.blog') => $attributes]);
			// 清除缓存
			if (cache()->has(config('admin.global.blog'))) {
				cache()->forget(config('admin.global.blog'));
			}
			flash(trans('admin/alert.setting.update_success'),'success')->important();
		} catch (Exception $e) {
			// 错误信息发送邮件
			$this->sendSystemErrorMail(env('MAIL_SYSTEMERROR',''),$e);
			return false;
		}

	}
}