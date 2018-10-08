<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitusiKursusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institusi_kursus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institusi_kod');
            $table->string('kursus_kod');
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->index('institusi_kod');
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
        Schema::dropIfExists('institusi_kursus');
    }
}
