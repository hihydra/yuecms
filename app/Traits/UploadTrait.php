<?php
namespace App\Traits;

use Image;
use Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Service\Admin\AttachService;
use zgldh\QiniuStorage\QiniuStorage;

trait UploadTrait
{
    /**
     * @var UploadedFile $file
     */
    protected $file;
    protected $attach;
    protected $allowed_extensions = ["png", "jpg", "gif", 'jpeg'];

    public function __construct(AttachService $attach)
    {
        $this->attach = $attach;
    }

    /**
     * 上传文件到七牛

     * @date   2016-12-12T17:14:41+0800
     * @param  [type]                   $file [request file 对象]
     * @return [type]                         [图片路径]
     */
    public function uploadQiniu($file)
    {
        $disk = QiniuStorage::disk('qiniu');
        $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        $isUpload = $disk->put(config('admin.global.imagePath').$fileName,file_get_contents($file->getRealPath()));
        if ($isUpload) {
            $customUrl  = env('QINIU_DOMAINS_CUSTOM') ? 'http://'.env('QINIU_DOMAINS_CUSTOM') : 'http://'.env('QINIU_DOMAINS_DEFAULT');
            $path = $customUrl.'/'.config('admin.global.imagePath').$fileName;
            return $path;
        }
        return '';
    }

    /**
     * @param UploadedFile $file
     * @param User $user
     * @return array
     */
    public function uploadAvatar($file, User $user)
    {
        $this->file = $file;
        $this->checkAllowedExtensionsOrFail();

        $avatar_name = $user->id . '_' . time() . '.' . $file->getClientOriginalExtension() ?: 'png';
        $path = $this->saveImageToLocal('avatar', 380, $avatar_name);

        return $path;
    }

    public function uploadImage($file)
    {
        $this->file = $file;
        $this->checkAllowedExtensionsOrFail();

        $path = $this->saveImageToLocal('images', 1440);

        return $path;
    }

    protected function checkAllowedExtensionsOrFail()
    {
        $extension = strtolower($this->file->getClientOriginalExtension());
        if ($extension && !in_array($extension, $this->allowed_extensions)) {
            throw new ImageUploadException('允许的附件文件类型: ' . implode($this->allowed_extensions, ','));
        }
    }

    protected function saveImageToLocal($type, $resize, $filename = '')
    {
        if ($type == 'avatar') {
            $folderName =  Auth::user()->id;
        }else{
            $folderName =  date("Ym", time()) .'/'.date("d", time()) .'/'. Auth::user()->id;
        }
        $folderName = config('admin.global.imagePath').$type.'/'.$folderName;

        $destinationPath = public_path().$folderName;

        $clientName = $this->file->getClientOriginalName();
        $safeName  = $filename ? :md5($clientName.time().rand()).'.'.$this->file->getClientOriginalExtension();
        $this->file->move($destinationPath, $safeName);
/*
        if ($this->file->getClientOriginalExtension() != 'gif') {
            $img = Image::make($destinationPath . '/' . $safeName);
            $img->resize($resize, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save();
        }
*/
        $attributes = array('file_name'=>$clientName,
                            'file_location'=>$safeName,
                            'type'=>$type,
                            'user_id'=>Auth::user()->id);

        //$this->attach->storeAttach($attributes);
        return $folderName .'/'. $safeName;
    }
}
