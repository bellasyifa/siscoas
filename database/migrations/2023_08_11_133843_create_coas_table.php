<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coas', function (Blueprint $table) {
            $table->id();
            $table->string('nrp')->unique();
            $table->string('name');
            $table->string('class');
            $table->string('subject');
            $table->string('day');
            $table->time('timein');
            $table->time('timeout');
            $table->string('email');
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
        Schema::dropIfExists('coas');
    }
}
