@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Barang</h1></center>
     <div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
</div>
</div>

<div class="panel-body">
	<form action="{{route('Barang.update')}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		{{csrf_field()}};

		<div class="form-group">
		   <label class="control-lable">Kode Barang</label>
		   <input type="text" name="a" value="{{$Barang->kode_barang}}" class="form-control" required="">
		</div>
		
		<div class="form-group">
		   <label class="control-lable">Nama Barang</label>
		   <input type="text" name="b" value="{{$Barang->nama_barang}}" class="form-control" required="">
		</div>

		<div class="form-group">
		   <label class="control-lable">Jumlah Barang</label>
		   <input type="number" name="c" value="{{$Barang->jumlah_barang}}" class="form-control" required="">
		</div>

		<div class="form-group">
		   <label class="control-lable">Harga Barang</label>
		   <input type="number" name="d" value="{{$Barang->harga_barang}}" class="form-control" required="">
		</div>

		<div class="form-group">
		   <button type="submit" class="btn btn-succes">Simpan</button> 
		   <button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>
@endsection