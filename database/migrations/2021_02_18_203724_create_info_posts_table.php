<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_posts', function (Blueprint $table) {
            $table->id();
            // creo la mia foreign key
            $table->unsignedBigInteger('post_id');
            $table->string('post_status', 10);
            $table->string('comment_status', 10);
            // $table->timestamps();

            // qui creo la relazione con la tabella posts
            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_posts');
    }
}
