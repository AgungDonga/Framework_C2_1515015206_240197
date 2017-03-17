<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
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
    	$dosen = new Dosen();
    	$dosen->nama = 'Agung Donga';
    	$dosen->nip = '111';
    	$dosen->alamat = 'Gg.Alam segar';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data dengan Nama : {$dosen->nama} dengan Nip {$dosen->nip} telah disimpan";
    }
}
