<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_matrik')->unique();
            $table->string('nama');
            $table->string('no_kp')->unique();
            $table->string('jantina_kod');
            $table->dateTime('tkh_lahir');
            $table->string('sesi_kemasukan');
            $table->text('alamat');
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri_kod');
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->unique('no_matrik', 'no_kp');
            $table->index('jantina_kod');
            $table->index('sesi_kemasukan');
            $table->index('negeri_kod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelajar');
    }
}
