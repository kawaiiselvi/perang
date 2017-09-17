<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brg extends Model
{
    //
    protected $fillable = ['nama_barang','jumlah_barang','stock_barang','kondisi_barang'];
    protected $visible = ['nama_barang','jumlah_barang','stock_barang','kondisi_barang'];
    
    public function pinjams()
    {
    	return $this->hasMany('App\Pinjam');
    }

}
