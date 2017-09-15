@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Peminjam</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Peminjam
		<div class="panel-title pull-right"><a href="/admin/peminjams/create">Tambah</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Nama Barang</th>
					</tr>
				</thead>
				<tbody>
				@foreach($peminjam as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->kelas}}</td>
						<td>{{$data->nama_barang}}</td>
						<td><a class="btn btn-warning" href="/admin/peminjams/{{$data->id}}/edit">Edit</a></td>
							<td><!-- <form action="{{route('barangs.destroy',$data->id)}}" method="post"> -->
							<form action="{{route('peminjams.destroy',$data->id)}}" method = "post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
</div>
@endsection