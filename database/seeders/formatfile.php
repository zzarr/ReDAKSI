<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class formatfile extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('formatfile')->insert([
            'id' => rand(1, 100),
            'jenis_file' => 'docx',
        ]);
        DB::table('formatfile')->insert([
            'id' => rand(1, 100),
            'jenis_file' => 'pdf',
        ]);
        DB::table('formatfile')->insert([
            'id' => rand(1, 100),
            'jenis_file' => 'xlsx',
        ]);
    }
}
