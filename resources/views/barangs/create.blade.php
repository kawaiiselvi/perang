@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('barangs.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama Barang</label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah Barang</label>
					<input type="text" name="b" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Stok Barang</label>
					<input type="text" name="c" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Kondisi Barang</label>
					<input type="text" name="d" class="form-control" required="">
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