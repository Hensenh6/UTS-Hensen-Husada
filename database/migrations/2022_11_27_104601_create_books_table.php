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
            $table->String('book_id') -> unique();
            $table->String('publisher_id');
            $table->foreign('publisher_id') -> references('publisher_id') -> on('publishers');
            $table->String('title');
            $table->String('author');
            $table->integer('year');
            $table->text('synopsis');
            $table->String('image');
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
}
