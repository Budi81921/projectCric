<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 5; $i++) {
            DB::table("kategoriPekerjaan")
            ->insert([
                'namaKategoriPekerjaan'=>"pekerjaan$i",
            ]);
        }

        DB::table("lowonganKerja")
        ->insert([	
            'fkusercompany'	=> 1,
            'title_lowongan'	=> 'Junior Machine Learning Engineer',
            'deskripsiPekerjaan'=>	'Lorem ipsum dolor sit amet, ',
            'fkKategoriPekerjaan'	=> 1,
            'kualifikasi'	=> '1. dapat menggunakan python',
            'lokasi'	=> 'WFO',
            'tipePekerjaan'=>'Freelance',
            'pendidikan'	=> 'S1',
            'pengalaman'=>'1 tahun'
        ]);
        DB::table("lowonganKerja")
        ->insert([	
            'fkusercompany'	=> 2,
            'title_lowongan'	=> 'Junior Machine Learning Engineer',
            'deskripsiPekerjaan'=>	'Lorem ipsum dolor sit amet,',
            'fkKategoriPekerjaan'	=> 2,
            'kualifikasi'	=> '1. dapat menggunakan python',
            'lokasi'	=> 'WFO',
            'tipePekerjaan'=>'Freelance',
            'pendidikan'	=> 'S1',
            'pengalaman'=>'1 tahun'
        ]);
        DB::table("lowonganKerja")
        ->insert([	
            'fkusercompany'	=> 3,
            'title_lowongan'	=> 'Junior Machine Learning Engineer',
            'deskripsiPekerjaan'=>	'Lorem ipsum dolor sit amet,',
            'fkKategoriPekerjaan'	=> 3,
            'kualifikasi'	=> '1. dapat menggunakan python',
            'lokasi'	=> 'WFO',
            'tipePekerjaan'=>'Freelance',
            'pendidikan'	=> 'S1',
            'pengalaman'=>'1 tahun'
        ]);
        DB::table("lowonganKerja")
        ->insert([	
            'fkusercompany'	=> 4,
            'title_lowongan'	=> 'Junior Machine Learning Engineer',
            'deskripsiPekerjaan'=>	'Lorem ipsum dolor sit amet,',
            'fkKategoriPekerjaan'	=> 4,
            'kualifikasi'	=> '1. dapat menggunakan python',
            'lokasi'	=> 'WFO',
            'tipePekerjaan'=>'Freelance',
            'pendidikan'	=> 'S1',
            'pengalaman'=>'1 tahun'
        ]);
        DB::table("lowonganKerja")
        ->insert([	
            'fkusercompany'	=> 5,
            'title_lowongan'	=> 'Junior Machine Learning Engineer',
            'deskripsiPekerjaan'=>	'Lorem ipsum dolor sit amet, ',
            'fkKategoriPekerjaan'	=> 5,
            'kualifikasi'	=> '1. dapat menggunakan python',
            'lokasi'	=> 'WFO',
            'tipePekerjaan'=>'Freelance',
            'pendidikan'	=> 'S1',
            'pengalaman'=>'1 tahun'
        ]); 
        for ($i = 1; $i <= 5; $i++) {
            DB::table("detail_lowongan")
            ->insert([
              'fklowongankerja'=> $i,
              'fkusercandidate'=> $i,
              'status'=>'proses'
            ]);
        }
    }
}
