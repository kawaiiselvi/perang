<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['nama_barang','jumlah_barang','stock_barang','kondisi_barang'];
    protected $visible = ['nama_barang','jumlah_barang','stock_barang','kondisi_barang'];
    
     public function peminjams()
    {
    	return $this->hasMany('App\Peminjam');
    }

    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($barang) 
    	{
    		if ($barang->peminjams->count()>0) 
    		{
    			$html = 'Barang Tidak Bisa Dihapus Karena Masih Dipinjam : ';
    			$html .= '<ul>';
    			foreach ($barang->peminjams as $peminjam) 
    			{
    				$html .= "<li>$peminjam->title</li>";
    			}
    			$html .= '</ul>';

    			Session::flash("flash_notification", [
    				"level"=>"danger",
    				"message"=>$html]);
    			return false;
    		}
    	});
    }
}
