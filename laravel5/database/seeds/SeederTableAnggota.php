<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('anggota')->delete();

        $anggota=array(
        	array('id'=>1,'nama'=>'Agung','alamat'=>'jl pramuka'),
        	array('id'=>2,'nama'=>'Layang','alamat'=>'jl perjuangan'),
        	array('id'=>3,'nama'=>'Donga','alamat'=>'jl pramuka 5'),
        	array('id'=>4,'nama'=>'Asus','alamat'=>'jl pramuka 6'));
        DB::table('anggota')->insert($anggota);
    }
}