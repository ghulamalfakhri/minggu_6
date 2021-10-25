<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('students')->insert([
        //     'nim' => '2031710168',
        //     'name' => 'M. Afada Nur Saiva Syahira',
        //     'class' => 'MI 2F',
        //     'department' => 'Manajemen Informatika',
        //     'phone_number' => '089622388293',            
        // ]);

        // DB::table('students')->insert([
        //     'nim' => '2031710032',
        //     'name' => 'M. Thosin Yuhaililul Hilmi',
        //     'class' => 'MI 2F',
        //     'department' => 'Manajemen Informatika',
        //     'phone_number' => '082334112406',            
        // ]);

        DB::table('students')->insert([
            'nim' => '2031710139',
            'name' => 'Moh. Iqbal Waldan',
            'class' => 'MI 2F',
            'department' => 'Manajemen Informatika',
            'phone_number' => '081334277979',            
        ]);
    }
}
