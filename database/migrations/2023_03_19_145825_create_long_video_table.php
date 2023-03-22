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
        Schema::create('long_video', function (Blueprint $table) {
            $table->increments('id')->startingValue(10000);
            $table->string('origin_name', 200)->unique()->comment('视频原名')->nullable(false);
            $table->string('stored_name', 200)->unique()->comment('存储名字')->nullable(false);
            $table->string('ext', 10)->comment('后缀名')->nullable(false);
            $table->unsignedBigInteger('size')->comment('文件大小')->nullable(false);
            $table->unsignedTinyInteger('type')->comment('原编码类型')->nullable(false);
            $table->string('origin_url')->comment('原文件链接')->nullable(false);
            $table->string('poster_url')->comment('海报/封面链接')->nullable(false);
            $table->string('m3u8_url')->comment('视频播放地址')->nullable(false);
            $table->string('av_code')->comment('番号或视频标识')->nullable(false);
            $table->string('poster_thumb_url')->comment('海报/封面缩略图地址')->nullable(false);
            $table->unsignedBigInteger('duration')->comment('视频长度秒')->nullable(false);
            $table->unsignedTinyInteger('state')->default(0)->comment('状态')->nullable(false);
            $table->unsignedBigInteger('upload_id')->comment('上传日志ID')->nullable(false);
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
        Schema::dropIfExists('long_video');
    }
};
