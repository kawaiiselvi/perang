@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('barangs.update',$barang->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">


				<div class="form-group">
					<label class="control-lable">Jumlah Barang</label>
					<input type="text" name="jumlah_barang" class="form-control" value="{{$barang->jumlah_barang}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Kondisi Barang</label>
					<input type="text" name="kondisi_barang" class="form-control" value="{{$barang->kondisi_barang}}" required="">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection