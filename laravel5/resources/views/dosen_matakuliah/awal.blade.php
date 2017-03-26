@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Matakuliah</strong>
	<a href="{{url('dosen_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal Dosen Matakuliah</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Dosen ID ID</th>
			<th>Matakuliah ID</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $dosen_matakuliah)
		<tr>
			<td>{{ $x++ }}</td>
			<td>{{ $dosen_matakuliah->dosen_id or 'dosen_id kosong'}}</td>
			<td>{{ $dosen_matakuliah->matakuliah_id or 'matakuliah_id kosong'}} </td>
			<td>
				<div class="btn-group" role="group">
	<a href="{{url('dosen_matakuliah/edit/'.$dosen_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('dosen_matakuliah/lihat/'.$dosen_matakuliah->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('dosen_matakuliah/hapus/'.$dosen_matakuliah->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop