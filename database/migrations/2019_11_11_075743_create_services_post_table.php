<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service-post', function (Blueprint $table) {
            $table->increments('post_id');            
            $table->string('category_name');
            $table->string('post_image');
            $table->string('post_title');
            $table->text('post_des');
            $table->string('publication_status');
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
        Schema::dropIfExists('service-post');
    }
}
