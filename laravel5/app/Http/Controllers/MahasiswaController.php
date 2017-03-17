<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari DosenController";
    }
    
    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Agung Donga';
    	$mahasiswa->nim = '111';
    	$mahasiswa->alamat = 'Perjuangan 7';
    	$mahasiswa->pengguna_id = '2';
    	$mahasiswa->save();
    	return "Data dengan Nama : {$mahasiswa->nama} dengan NIM : {$mahasiswa->nim} telah disimpan";
    }
}
