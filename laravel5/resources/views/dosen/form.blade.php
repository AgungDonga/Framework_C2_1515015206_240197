<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10">
	{!! Form::text('nama',null,array('required','class'=>'form-control','placeholder'=>"nama"))!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nip</label>
<div class="col-sm-10">
	{!! Form::text('nip',null,array('required','class'=>'form-control','placeholder'=>"NIP"))!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Alamat</label>
<div class="col-sm-10">
	{!! Form::text('alamat',null,array('required','class'=>'form-control','placeholder'=>"alamat"))!!}
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Pengguna ID</label>
<div class="col-sm-10">
	{!! Form::number('pengguna_id',null,array('required','class'=>'form-control','placeholder'=>"pengguna_id"))!!}
</div>
</div>
