<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Infos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->index()->unique();
            $table->string('gender');
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('nationality');
            $table->date('dob');
            $table->string('faculty');
            $table->string('module');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info');
    }
}