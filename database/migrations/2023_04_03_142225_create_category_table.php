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
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->unique()->nullable(false)->comment('分类名字');
            $table->unsignedInteger('sort')->default(new \Illuminate\Database\Query\Expression('0'))->comment('排序');
            $table->string('slug', 32)->unique()->nullable(false)->comment('唯一标识');
            $table->unsignedBigInteger('items_total')
                ->default(new \Illuminate\Database\Query\Expression(0))
                ->comment('库内该分类影片总数');
            $table->datetime('created_at')->nullable(false)->comment('创建时间');
            $table->dateTime('updated_at')->nullable(false)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
