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
        Schema::create('plot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->unique()->default('')->comment('剧情名字');
            $table->string('desc', 512)->default('')->comment('剧情说明');
            $table->string('slug', 64)->unique()->default('')->comment('唯一标识');
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
        Schema::dropIfExists('plot');
    }
};
