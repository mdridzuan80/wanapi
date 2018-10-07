<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKolej extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolej', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kod')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->string('bandar');
            $table->string('poskod');
            $table->string('negeri_kod');
            $table->string('institusi_kod');
            $table->softDeletes();
            $table->timestamps();

            // indexing
            $table->index('negeri_kod');
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
        Schema::dropIfExists('kolej');
    }
}
