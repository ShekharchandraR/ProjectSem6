<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('Address');
            $table->string('Email');
            $table->date('DOB');
            $table->string('Mobile_no');
            $table->string('Password');
            $table->string('Image');
            $table->string('Qualification');
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
        Schema::dropIfExists('teachers');
    }
}
