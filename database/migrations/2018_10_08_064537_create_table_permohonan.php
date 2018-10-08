<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nokp');
            $table->string('nama');
            $table->text('alamat');
            $table->string('bandar');
            $table->string('poskod');
            $table->string('negeri_kod');
            $table->string('status_permohonan')->default('BARU');
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->index('nokp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}
