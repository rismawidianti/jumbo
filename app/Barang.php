<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //

    protected $fillable =['kode_barang','nama_barang','jumlah_barang','harga_barang'];
    protected $visible  =['kode_barang','nama_barang','jumlah_barang','harga_barang'];
    public $timestamps =true;
}