<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $table = 'attachs';

    protected $fillable = ['file_name','file_location','type','user_id'];
}
