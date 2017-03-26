<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_matakuliah;

class jadwal_matakuliahc extends Controller
{
   public function awal()
    {
        return view('jadwal_matakuliah.awal',['data'=>Jadwal_matakuliah::all()]);
    }
     public function tambah()
    {
        return view('jadwal_matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $jadwal_matakuliah = new Jadwal_matakuliah();
        $jadwal_matakuliah->mahasiswa_id=$input->mahasiswa_id;
        $jadwal_matakuliah->ruangan_id =$input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id =$input->dosen_matakuliah_id;
        $informasi=$jadwal_matakuliah->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        return view('jadwal_matakuliah.edit')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
    }
    public function lihat($id)
    {
        $jadwal_matakuliah= Jadwal_matakuliah::find($id);
        return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah' =>$jadwal_matakuliah));
    }
    public function update($id,Request $input)
    {
        $jadwal_matakuliah = Jadwal_matakuliah::find($id);
        $jadwal_matakuliah->mahasiswa_id=$input->mahasiswa_id;
        $jadwal_matakuliah->ruangan_id=$input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id =$input->dosen_matakuliah_id;
        $informasi=$jadwal_matakuliah->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jadwal_matakuliah=Jadwal_matakuliah::find($id);
        $informasi=$jadwal_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
    }
}