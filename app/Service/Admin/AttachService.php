<?php
namespace App\Service\Admin;
use App\Repositories\Eloquent\AttachRepositoryEloquent;
use App\Traits\AttachTrait;
use App\Traits\SendSystemErrorTrait;
use Exception,DB;
/**
* 附件service
*/
class AttachService{

	use SendSystemErrorTrait;

	protected $attach;

	public function __construct(AttachRepositoryEloquent $attach)
	{
		$this->attach = $attach;
	}

	public function storeAttach($attributes){
		try {
			$result = $this->attach->create($attributes);
			return $result;
		} catch (Exception $e) {
			// 错误信息发送邮件
			$this->sendSystemErrorMail(env('MAIL_SYSTEMERROR',''),$e);
			return false;
		}
	}

}