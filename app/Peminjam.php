<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //
	protected $fillable = ['nama','kelas','barang'];

    public function Peminjam()
    {
    	return $this->belongsTo('App\Barang');
    }
}
