@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('dosen') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Dosen</strong>
</div>
<table class="table">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{ $dosen->nama }}</td>
	</tr>
	<tr>
		<td>Nip</td>
		<td>:</td>
		<td>{{ $dosen->nip }}</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>{{ $dosen->alamat }}</td>
	</tr>
	<tr>
		<td>Pengguna ID</td>
		<td>:</td>
		<td>{{ $dosen->pengguna_id }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dosen-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dosen-> update_at}}</td>	
	</tr>
</table>
</div>
@stop