<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ar_name');
            $table->string('en_name');
            $table->integer('menu_id')->unsigned();
            $table->integer('arpage_id')->unsigned()->nullable();
            $table->integer('enpage_id')->unsigned()->nullable();

            $table->foreign('arpage_id')->references('id')->on('arpages')->onDelete('cascade');;
            $table->foreign('enpage_id')->references('id')->on('enpages')->onDelete('cascade');;


            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');;



            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('items');
    }
}
