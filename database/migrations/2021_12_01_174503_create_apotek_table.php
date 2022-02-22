<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApotekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apotek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_apotek');
            $table->string('alamat_apotek');
            $table->string('no_telp_apotek');
            $table->string('obat');
            $table->string('kategori');
            $table->string('harga');
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
        Schema::dropIfExists('apotek');
    }
}
