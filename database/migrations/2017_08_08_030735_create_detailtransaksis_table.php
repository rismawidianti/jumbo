<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailtransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_transaksi')->unsigned();
            $table->integer('kode_barang')->unsigned();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')->on('Transaksis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_barang')->references('id')->on('Barangs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaksis');
    }
}
