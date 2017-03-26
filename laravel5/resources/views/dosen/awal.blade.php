@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Dosen</strong>
	<a href="{{url('dosen/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Dosen</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nip</th>
			<th>Alamat</th>
			<th>Pengguna Id</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $dosen)
		<tr>
			<td>{{ $x++ }}</td>
			<td>{{ $dosen->nama or 'nama kosong'}}</td>
			<td>{{ $dosen->nip or 'nip kosong'}} </td>
			<td>{{ $dosen->alamat or 'alamat kosong'}} </td>
			<td>{{ $dosen->pengguna_id or 'pengguna_id kosong'}} </td>
			<td>
				<div class="btn-group" role="group">
	<a href="{{url('dosen/edit/'.$dosen->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('dosen/lihat/'.$dosen->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('dosen/hapus/'.$dosen->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop