<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapenumpangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenumpangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jemput');
            $table->string('tujuan');
            $table->string('armada');
            $table->date('tanggalberangkat');
            $table->date('tanggalpulang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapenumpangs');
    }
}
