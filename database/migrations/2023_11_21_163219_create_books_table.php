<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('autor')->nullable(true);
            $table->string('year')->nullable(true);
            $table->integer('copies')->nullable(true)->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};