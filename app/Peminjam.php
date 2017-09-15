<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //
	protected $fillable = ['nama','kelas','barang'];
	// protected $visible = ['nama','kelas','barang'];

    public function Peminjam()
    {
    	return $this->belongsTo('App\Barang');
    }
}
