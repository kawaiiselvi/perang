@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('barangs.update',$barangs->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama Barang</label>
					<input type="text" name="a" class="form-control" value="{{$barangs->nama_barang}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah Barang</label>
					<input type="text" name="jumlah_barang" class="form-control" value="{{$barangs->jumlah_barang}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Stock Barang</label>
					<input type="text" name="stock_barang" class="form-control" value="{{$barangs->stock_barang}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Kondisi Barang</label>
					<input type="text" name="kondisi_barang" class="form-control" value="{{$barangs->kondisi_barang}}" required="">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection