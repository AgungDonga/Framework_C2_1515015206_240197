<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('hobi')->delete();

        $anggota=array(
            array('hobi'=>'Traveling','anggota_id'=>'1'),
            array('hobi'=>'Nonton Film','anggota_id'=>'2'),
            array('hobi'=>'Kuliner','anggota_id'=>'1'),
        	array('hobi'=>'Membaca buku','anggota_id'=>'2'));
        DB::table('hobi')->insert($hobi);
    }
}