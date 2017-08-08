@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="/Barang/create">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
					    <th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Jumlah Barang</th>
						<th>Harga Barang</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					@foreach($Barang as $data)
					    <td>{{$data->kode_barang}}</td>
						<td>{{$data->nama_barang}}</td>
						<td>{{$data->jumlah_barang}}</td>
						<td>{{$data->harga_barang}}</td>
						</tr>
						<td>
							<a class="btn btn-warning" href="/Barang/{{$data->id}}/edit">Edit</a>
						</td>
						<td><a class="btn btn-primary" href="/Barang/{{$data->id}}">Show</a></td>
						<td>
							<form action="{{route('Barang.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="DELETE" class="btn btn-danger">
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