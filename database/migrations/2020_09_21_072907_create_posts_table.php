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
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->string('title');
            $table->string('slug');
            $table->text('summary');
            $table->string('feature_image')->nullable();
            $table->mediumText('content');
            $table->text('images');
            $table->text('navs');
            $table->boolean('status')->default('0');
            $table->string('seo_title')->nullable();
            $table->string('seo_desc')->nullable();
            $table->string('seo_keys')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('author_id');
            $table->foreign('cat_id')->references('id')->on('categories');
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
