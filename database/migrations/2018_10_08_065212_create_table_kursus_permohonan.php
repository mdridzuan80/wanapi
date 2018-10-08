<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKursusPermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursus_permohonan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permohonan_id')->unsigned();
            $table->string('kursus_kod');
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->index('permohonan_id');
            $table->index('kursus_kod');
            $table->unique(['permohonan_id', 'kursus_kod']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kursus_permohonan');
    }
}
