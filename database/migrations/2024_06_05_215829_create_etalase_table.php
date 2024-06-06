<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('sqlite')->create('etalase', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('stock');
            $table->string('satuan');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('sqlite')->dropIfExists('etalase');
    }
};
