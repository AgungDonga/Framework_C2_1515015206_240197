<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('posttest1');
});

Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hallo world dari pengguna $pengguna";
});

Route::get('/public', function () {
    return ("Nama Saya : Agung Layang Donga");
});


Route::get('good', function () {
    return view('hey');
});

Route::get('/cobamodel',function()
{
	$anggota=App\Anggota::all()->first();
	echo $anggota->nama;
	echo $anggota->alamat;
});

Route::get('/cobamodel1',function()
{
	$anggota=App\Anggota::where('nama','=','Agung')->first();
	echo $anggota->id.' ';
	echo $anggota->nama;
});

Route::get('/cobamodel2',function()
{
	$anggota=App\Anggota::all();
	foreach ($anggota as $list) 
		{
			echo $list->nama;
			echo $list->alamat;
		}
});

Route::get('/cobamodel3',function()
{
	$anggota=new App\Anggota;
	$anggota->nama = 'Taylor';
	$anggota->alamat ='Avenue 12' ;
	$anggota->save();
});

Route::get('/cobamodel4',function()
{
	$anggota=App\Anggota::find(4);
	$anggota->nama = 'John depp';
	$anggota->alamat ='Silicon Valley' ;
	$anggota->save();
});

Route::get('/cobamodel5',function(){
	$anggota=App\Anggota::find(1);
	$anggota->delete();
});

