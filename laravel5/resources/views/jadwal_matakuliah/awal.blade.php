@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Matakuliah</strong>
	<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal Matakuliah</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Mahasiswa ID</th>
			<th>Ruangan ID</th>
			<th>Dosen Matakuliah ID</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $jadwal_matakuliah)
		<tr>
			<td>{{ $x++ }}</td>
			<td>{{ $jadwal_matakuliah->mahasiswa_id or 'mahasiswa_id kosong'}}</td>
			<td>{{ $jadwal_matakuliah->ruangan_id or 'ruangan_id kosong'}} </td>
			<td>{{ $jadwal_matakuliah->dosen_matakuliah_id or 'dosen_matakuliah_id kosong'}} </td>
			<td>
				<div class="btn-group" role="group">
	<a href="{{url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('jadwal_matakuliah/lihat/'.$jadwal_matakuliah->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop