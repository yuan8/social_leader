<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bots',function(Blueprint $table){
            $table->increments('id')->index();
            $table->string('profile_img')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('uid')->nullable();
            $table->string('access_token')->nullable();
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
        //
        Schema::dropIfExists('bots');
    }
}
