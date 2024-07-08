<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i = 1; $i <= 5; $i++) {
            DB::table("users")
            ->insert([
                'nama_lengkap'=>"admin$i",
                'email'=>"admin@gmail$i.com",
                'password'=>Hash::make('12345678'),
                'role'=>'candidate'
            ]);
        }
        for ($i = 6; $i <= 10; $i++) {
            DB::table("users")
            ->insert([
                'nama_lengkap'=>"admin$i",
                'email'=>"admin@gmail$i.com",
                'password'=>Hash::make('12345678'),
                'role'=>'company'
            ]);
        }
       
        
        DB::table("usercandidate")
        ->insert([	
            'fkidusercandidate'	=> 1,
            'tanggal_lahir'	=>'2020-08-12',
            'nomor_handphone'	=> '081234567',
            'alamat'	=> 'jalan hijau',
            'gender'	=> 'pria',
            'universitas'	=> 'Al Azhar Indonesia',
            'gelar' => 'S1'
        ]);
        DB::table("usercandidate")
        ->insert([	
            'fkidusercandidate'	=> 2,
            'tanggal_lahir'	=>'2020-09-12',
            'nomor_handphone'	=> '081234567',
            'alamat'	=> 'jalan hijau',
            'gender'	=> 'pria',
            'universitas'	=> 'Al Azhar Indonesia',
            'gelar' => 'S1'
        ]);
        DB::table("usercandidate")
        ->insert([	
            'fkidusercandidate'	=> 3,
            'tanggal_lahir'	=>'2020-10-12',
            'nomor_handphone'	=> '081234567',
            'alamat'	=> 'jalan hijau',
            'gender'	=> 'pria',
            'universitas'	=> 'Al Azhar Indonesia',
            'gelar' => 'S1'
        ]);
        DB::table("usercandidate")
        ->insert([	
            'fkidusercandidate'	=> 4,
            'tanggal_lahir'	=>'2020-11-12',
            'nomor_handphone'	=> '081234567',
            'alamat'	=> 'jalan hijau',
            'gender'	=> 'pria',
            'universitas'	=> 'Al Azhar Indonesia',
            'gelar' => 'S1'
        ]);
        DB::table("usercandidate")
        ->insert([	
            'fkidusercandidate'	=> 5,
            'tanggal_lahir'	=>'2020-12-12',
            'nomor_handphone'	=> '081234567',
            'alamat'	=> 'jalan hijau',
            'gender'	=> 'pria',
            'universitas'	=> 'Al Azhar Indonesia',
            'gelar' => 'S1'
        ]);

        DB::table("usercompany")
        ->insert([	
            'fkusercompany'	=> 6,
            'deskripsi_perusahaan'	=> 'KFC Juara Ayam',
            'nomor_telepon'	=> '081234567',
            'tahun_berdiri'	=> '2024',
            'url'	=> 'Https://kfcfriedchicken.com'
        ]);
        DB::table("usercompany")
        ->insert([	
            'fkusercompany'	=> 7,
            'deskripsi_perusahaan'	=> 'KFC Juara Ayam',
            'nomor_telepon'	=> '081234567',
            'tahun_berdiri'	=> '2024',
            'url'	=> 'Https://kfcfriedchicken.com'
        ]);
        
        DB::table("usercompany")
        ->insert([	
            'fkusercompany'	=> 8,
            'deskripsi_perusahaan'	=> 'KFC Juara Ayam',
            'nomor_telepon'	=> '081234567',
            'tahun_berdiri'	=> '2024',
            'url'	=> 'Https://kfcfriedchicken.com'
        ]);
        
        DB::table("usercompany")
        ->insert([	
            'fkusercompany'	=> 9,
            'deskripsi_perusahaan'	=> 'KFC Juara Ayam',
            'nomor_telepon'	=> '081234567',
            'tahun_berdiri'	=> '2024',
            'url'	=> 'Https://kfcfriedchicken.com'
        ]);
        
        DB::table("usercompany")
        ->insert([	
            'fkusercompany'	=> 10,
            'deskripsi_perusahaan'	=> 'KFC Juara Ayam',
            'nomor_telepon'	=> '081234567',
            'tahun_berdiri'	=> '2024',
            'url'	=> 'Https://kfcfriedchicken.com'
        ]);
        
        DB::table("detail_alamat_perusahaan")
        ->insert([	
            'fkusercompany'	=> 1,
            'Alamat_detail' =>"Jakarta Selatan",
            'provinsi'=>"DKI Jakarta",
            'kota_kabupaten'=>"Jakarta Selatan",
            'kecamatan'=>"KBY",
            'kelurahan'=>"Selong",
            'kode_pos'=>"1111",
        ]);
        DB::table("detail_alamat_perusahaan")
        ->insert([	
            'fkusercompany'	=> 2,
            'Alamat_detail' =>"Jakarta barat",
            'provinsi'=>"DKI Jakarta",
            'kota_kabupaten'=>"Jakarta Selatan",
            'kecamatan'=>"Pulo gadung",
            'kelurahan'=>"binjay",
            'kode_pos'=>"1111",
        ]);
        DB::table("detail_alamat_perusahaan")
        ->insert([	
            'fkusercompany'	=> 3,
            'Alamat_detail' =>"jalan berkat",
            'provinsi'=>"Jawa Barat",
            'kota_kabupaten'=>"Bekasi",
            'kecamatan'=>"rawa ribung",
            'kelurahan'=>"galaxy",
            'kode_pos'=>"1111",
        ]);
        DB::table("detail_alamat_perusahaan")
        ->insert([	
            'fkusercompany'	=> 4,
            'Alamat_detail' =>"jalan berkat",
            'provinsi'=>"Jawa Barat",
            'kota_kabupaten'=>"Bekasi",
            'kecamatan'=>"rawa ribung",
            'kelurahan'=>"galaxy",
            'kode_pos'=>"1111",
        ]);
        DB::table("detail_alamat_perusahaan")
        ->insert([	
            'fkusercompany'	=> 5,
            'Alamat_detail' =>"jalan berkat",
            'provinsi'=>"Jawa Barat",
            'kota_kabupaten'=>"Bekasi",
            'kecamatan'=>"rawa ribung",
            'kelurahan'=>"galaxy",
            'kode_pos'=>"1111",
        ]);
      
    }
}
