<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
   protected $table = 'jadwal_matakuliah';
   protected $isi = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}