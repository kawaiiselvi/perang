@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="/admin/barangs/create">Tambah</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Jumlah Barang</th>
						<th>Stok Barang</th>
						<th>Kondisi Barang</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($barang as $data)
					<tr>
						<td>{{$data->a}}</td>
						<td>{{$data->b}}</td>
						<td>{{$data->c}}</td>
						<td>{{$data->d}}</td>
						<td><a class="btn btn-warning" href="/admin/barangs/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('barangs.destroy',$data->id)}}" method="post">
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