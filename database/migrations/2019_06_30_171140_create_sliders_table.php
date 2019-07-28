<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('sliders', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('arpage_id')->unsigned()->nullable();
           $table->integer('enpage_id')->unsigned()->nullable();
           $table->foreign('arpage_id')->references('id')->on('arpages');
           $table->foreign('enpage_id')->references('id')->on('enpages');
           $table->string('content')->nullable();
           $table->string('name');
           $table->string('path');
           $table->timestamp('start_date')->nullable();
           $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
