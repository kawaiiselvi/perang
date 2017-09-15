<?php

use Illuminate\Database\Seeder;
use App\Peminjam;
use App\Barang;

class PeminjamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // $b1=Barang::create(['nama_barang'=>'Mouse','jumlah_barang'=>'20','stock_barang'=>'10','kondisi_barang'=>'Bekas']);
       //  $b2=Barang::create(['nama_barang'=>'Keyboard','jumlah_barang'=>'20','stock_barang'=>'15','kondisi_barang'=>'Bekas']);
       //  $b3=Barang::create(['nama_barang'=>'Speaker','jumlah_barang'=>'10','stock_barang'=>'5','kondisi_barang'=>'Bekas']);

       //  $p1=Peminjam::create(['nama'=>'Delia','kelas'=>'12 Rpl 2','barang'=>$b1->id]);
       //  $p2=Peminjam::create(['nama'=>'Selvi','kelas'=>'12 Rpl 2','barang'=>$b2->id]);
       //  $p3=Peminjam::create(['nama'=>'Ega','kelas'=>'12 Rpl 2','barang'=>$b3->id]);
        
       //  $member=User::where('email','member@gmail.com')->first();
       //  BorrowLog::create(['user_id'=>$member->id, 'peminjam_id'=>$p1->id,'is_returned'=>0]);
       //  BorrowLog::create(['user_id'=>$member->id, 'peminjam_id'=>$p2->id,'is_returned'=>0]);
       //  BorrowLog::create(['user_id'=>$member->id, 'peminjam_id'=>$p3->id,'is_returned'=>1]);
    }
}
