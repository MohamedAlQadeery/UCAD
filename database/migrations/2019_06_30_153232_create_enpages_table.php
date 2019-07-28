<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enpages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('content');
            $table->string('meta_key')->nullable();
            $table->string('meta_desc')->nullable();
            $table->enum('type',['0','1','2']); //0 مقال 1 اخبار 2 اعلانات

            $table->softDeletes();
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
        Schema::dropIfExists('enpages');
    }
}
