<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'nama_depan' => 'Budi',
                'nama_belakang' => 'Santoso',
                'email' => 'admin@admin.com',
                'tanggal_lahir' => '1990-01-01',
                'Jenis_kelamin' => 'Laki-laki',
                'password' => Hash::make('password123'),
            ],
            
        ];

        DB::table('admins')->insert($admins);
    }
}
