@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-body">
                    <center><h1><basefont>Selamat Datang!^^</basefont></h1></center>
                </div>

                <div class="panel-body">
                    <center><h2><basefont>Silahkan Login Terlebih Dahulu!^^</basefont></h2></center>
                </div>

                <div class="panel-body">
                    <center><h3><basefont>Tidak Punya Akun? Silahkan Mendaftar Di Perang.com!^^</basefont></h3></center>
                </div>

				<!-- <div class="panel-body">
					{!! $html->table(['class'=>'table-striped']) !!}
				</div> -->
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection