<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('status')->default(1);
            $table->string('default_lang')->default('ar');
            $table->softDeletes();
            $table->timestamps();
        });

        \App\Front\Setting::firstOrCreate([
            'default_lang'=>'ar',
            'email'=>'ADAWD@asdsad.com'
        ]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
