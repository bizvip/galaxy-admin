<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('long_video_upload_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name', 200)->nullable(false)->comment('原文件名');
            $table->string('file_ext', 200)->nullable(false)->comment('文件扩展名');
            $table->string('file_path', 256)->nullable(false)->comment('源文件存储路径');
            $table->string('stored_name', 64)->nullable(false)->comment('存储名');
            $table->unsignedBigInteger('file_size')->nullable(false)->comment('文件大小');
            $table->string('from_ua', 1024)->default('')->nullable(false)->comment('来源客户端(如果有)');
            $table->string('from_usr', 32)->nullable(false)->comment('来源用户名(如果有)');
            $table->string('from_ip', 15)->nullable(false)->comment('来源IP');
            $table->unsignedTinyInteger('state')->nullable(false)->default(0)->comment('上传状态');
            $table->dateTime('start_time')->nullable(false)->comment('上传时间');
            $table->datetime('created_at')->nullable(false)->comment('创建时间');
            $table->dateTime('updated_at')->nullable(false)->comment('更新时间');
            $table->dateTime('deleted_at')->nullable()->default(null)->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('long_video_upload_log');
    }
};
