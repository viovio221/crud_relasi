<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tanggalabsenseeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('tanggal')->insert([
            'tanggal' =>'2023-07-12'
        ]);

        DB::table('tanggal')->insert([
            'tanggal' =>'2023-07-24'
        ]);

        DB::table('tanggal')->insert([
            'tanggal' =>'2023-07-30'
        ]);


        DB::table('absen')->insert(
            [
                'nama' => 'Keyza Khaliszaza',
                'kelas' =>'XI MEKATR0NIKA D',
                'tanggal' => '4',
                'masuk' => '18:00 PM',
                'keluar' => '06:30 AM',
        ]);  
        DB::table('absen')->insert(
            [
                'nama' => 'Keyza Khalishazzazazaz',
                'kelas' =>'XI MEKATR0NIKA A',
                'tanggal' => '5',
                'masuk' => '18:35 PM',
                'keluar' => '06:35 AM',
        ]);  
        DB::table('absen')->insert(
            [
                'nama' => 'Keyzazzzzz',
                'kelas' =>'XI RPL B',
                'tanggal' => '6',
                'masuk' => '18:30 PM',
                'keluar' => '06:45 AM',
        ]);  
    }
}