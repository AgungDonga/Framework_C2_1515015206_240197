<?php
use App\pengguna;
use App\dosen;
use App\mahasiswa;
use App\matakuliah;
use App\ruangan;
use App\dosen_matakuliah;
use App\jadwal_matkul;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return ('Nama : Agung Layang Donga');
});
Route::get('pengguna','penggunacontroller@awal');
Route::get('/pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');
Route::post('/pengguna/simpan','penggunacontroller@simpan');
Route::get('/pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('/pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('/pengguna/hapus/{pengguna}','penggunacontroller@hapus');

Route::get('jadwal_matakuliah','jadwal_matakuliahc@awal');
Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahc@tambah');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','jadwal_matakuliahc@lihat');
Route::post('/jadwal_matakuliah/simpan','jadwal_matakuliahc@simpan');
Route::get('/jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahc@edit');
Route::post('/jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahc@update');
Route::get('/jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahc@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahc@awal');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahc@tambah');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahc@lihat');
Route::post('/dosen_matakuliah/simpan','dosen_matakuliahc@simpan');
Route::get('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahc@edit');
Route::post('/dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahc@update');
Route::get('/dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahc@hapus');

Route::get('matakuliah','matakuliahc@awal');
Route::get('/matakuliah/tambah','matakuliahc@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahc@lihat');
Route::post('/matakuliah/simpan','matakuliahc@simpan');
Route::get('/matakuliah/edit/{matakuliah}','matakuliahc@edit');
Route::post('/matakuliah/edit/{matakuliah}','matakuliahc@update');
Route::get('/matakuliah/hapus/{matakuliah}','matakuliahc@hapus');

Route::get('ruangan','ruanganc@awal');
Route::get('/ruangan/tambah','ruanganc@tambah');
Route::get('ruangan/lihat/{ruangan}','ruanganc@lihat');
Route::post('/ruangan/simpan','ruanganc@simpan');
Route::get('/ruangan/edit/{ruangan}','ruanganc@edit');
Route::post('/ruangan/edit/{ruangan}','ruanganc@update');
Route::get('/ruangan/hapus/{ruangan}','ruanganc@hapus');

Route::get('/dosen','dosenc@awal');
Route::get('/dosen/tambah','dosenc@tambah');
Route::get('/mahasiswa','mahasiswac@awal');
Route::get('/mahasiswa/tambah','mahasiswac@tambah');
Route::get('/matakuliah','matakuliahc@awal');
Route::get('/matakuliah/tambah','matakuliahc@tambah');
Route::get('/ruangan','ruanganc@awal');
Route::get('/ruangan/tambah','ruanganc@tambah');
Route::get('/dosmat','dosen_matakuliahc@awal');
Route::get('/dosmat/tambah','dosen_matakuliahc@tambah');
Route::get('/jadwal','jadwal_matkulc@awal');
Route::get('/jadwal/tambah','jadwal_matkulc@tambah');
