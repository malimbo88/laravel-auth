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
            // Preset id
            $table->id();

            // Foreign key user_id
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
              ->references("id")
              ->on("users");

            // title
            $table->string("title");

            // image_path
            $table->text("image_path")->nullable();

            // content
            $table->longText("content");

            // Preset created_at & updated_at
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
