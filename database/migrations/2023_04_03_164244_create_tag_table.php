<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->unique()->default('')->comment('标签名');
            $table->string('slug')->unique()->default('')->comment('标签英文');
            $table->string('head_img', 256)->default('')->comment('标签头像');
            $table->unsignedBigInteger('items_total')->default(new \Illuminate\Database\Query\Expression('0'))->comment('该标签下影片数量');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag');
    }
};
