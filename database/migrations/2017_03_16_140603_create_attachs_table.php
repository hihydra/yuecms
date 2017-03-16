<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name')->default('')->comment('上传的文件名称');
            $table->string('file_location')->default('')->comment('保存的文件名称');
            $table->string('type')->default('')->comment('文件类型');
            $table->integer('user_id')->unsigned()->default(0)->index()->comment('用户ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachs');
    }
}
