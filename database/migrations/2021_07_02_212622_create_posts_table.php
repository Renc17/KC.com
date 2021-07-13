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
            $table->unsignedBigInteger('user_id');

            $table->string('title');
            $table->string('road');
            $table->string('no');
            $table->string('city');
            $table->string('postal_code');
            $table->string('relative_address');
            $table->string('rent_type')->nullable();
            $table->string('description')->nullable();
            $table->string('floors');
            $table->string('parking');
            $table->string('baths');
            $table->string('bedrooms');
            $table->string('price');
            $table->string('full_price')->nullable();
            $table->string('sqrm');
            $table->string('utilities')->nullable();
            $table->string('image');

            $table->timestamps();

            $table->index('user_id');
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
