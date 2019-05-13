<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateCategoriesPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_post',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('post_id');
            $table->bigInteger('categoria_id');
    
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
    }
}
