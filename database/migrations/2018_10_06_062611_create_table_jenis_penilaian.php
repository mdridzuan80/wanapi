<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJenisPenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kod')->unique();
            $table->string('nama');
            $table->string('institusi_kod');
            $table->softDeletes();
            $table->timestamps();

            //indexing
            $table->index('institusi_kod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_penilaian');
    }
}
