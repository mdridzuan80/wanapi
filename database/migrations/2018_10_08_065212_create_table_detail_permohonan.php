<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailPermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_permohonan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permohonan_id')->unsigned();
            $table->integer('institusi_kursus_id');
            $table->boolean('status_pilihan')->default(false);
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->index('permohonan_id');
            $table->index('institusi_kursus_id');
            $table->unique(['permohonan_id', 'institusi_kursus_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_permohonan');
    }
}
