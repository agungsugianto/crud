<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrukturorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strukturors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kep_uni');
            $table->string('wakil_kepuni');
            $table->string('sekretaris');
            $table->string('bendahara');
            $table->unsignedInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('
            CASCADE');
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
        Schema::dropIfExists('strukturors');
    }
}
