<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("password",20);
            $table->timestamps();
        });
        Schema::create("DATA",function (Blueprint $table){
            $table->increments("id");
            $table->integer("uid");
            $table->string("filePath");
            $table->string("extension");
            $table->text("result");
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('USERS');
        Schema::dropIfExists("DATA");
    }
}
