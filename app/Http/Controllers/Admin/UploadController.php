<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function upload($request)
    {
        if ($request->hasFile('editormd-image-file')) {
            $path = $this->upload($request->file('editormd-image-file'));
            return ['success'=> 1,'message' => trans('alert.article.upload_success'),'url' => $path];
        }
        return ['success'=> 0,'message' => trans('alert.article.upload_error')];
    }

}
