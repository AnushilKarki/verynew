<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->timestamps();
            $table->foreignId('shop_id')->references('id')->on('shops')->nullable();
            $table->foreignId('author_id')->references('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
