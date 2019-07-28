<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
// ['subject','name','age','location','type','college','student_number','phone','mobile','email','status']

    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->integer('knowabout_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('knowabout_id')->references('id')->on('knowabouts');

            $table->string('name');
            $table->string('age');
            $table->enum('type',['0','1','2','3','4']);
             //0 طالب داخل الجامعه 1 طالب خارج الجامعه 2 خريج 3 موظف 4 عاطل عن العمل
            $table->string('college')->nullable();
            $table->string('student_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('location');
            $table->string('email');

            $table->enum('status',['0','1','2'])->default(2); //0 مقبول 1 مرفوض 2 مؤجل


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
        Schema::dropIfExists('applications');
    }
}
