<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_obat');
            $table->string('nama');
            $table->string('tipe');
            $table->string('kategori');
            $table->date('tgl_expired');
            $table->integer('hrg_beli');
            $table->integer('hrg_jual');
            $table->string('id_supplier');
            $table->integer('stok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
