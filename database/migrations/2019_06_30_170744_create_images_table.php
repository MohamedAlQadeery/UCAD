<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('images', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('arpage_id')->unsigned()->nullable();
           $table->integer('enpage_id')->unsigned()->nullable();
           $table->integer('album_id')->unsigned()->nullable();

           $table->foreign('arpage_id')->references('id')->on('arpages');
           $table->foreign('enpage_id')->references('id')->on('enpages');
           $table->foreign('album_id')->references('id')->on('albums');
           $table->string('path');
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
        Schema::dropIfExists('images');
    }
}
