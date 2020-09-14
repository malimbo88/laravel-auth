<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // Preset Id
            $table->id();

            // Foreign key User_id
            $table->unsignedBigInteger("user_id")
            $table->foreign("user_id")
                  ->refernces("id")
                  ->on("users");

            // Title
            $table->string("title");

            // Content
            $table->longText("content");

            // Preset Created_at & Updated_at
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
        Schema::dropIfExists('posts');
    }
}
