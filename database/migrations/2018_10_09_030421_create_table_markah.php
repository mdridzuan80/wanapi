<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMarkah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nokp');
            $table->string('kursus_kod');
            $table->string('subjek_kod');
            $table->integer('jumlah');
            $table->timestamps();

            // indexing
            $table->index('nokp');
            $table->index('subjek_kod');
            $table->index('kursus_kod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markah');
    }
}
