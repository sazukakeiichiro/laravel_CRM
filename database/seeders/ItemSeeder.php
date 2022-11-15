<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'name' => 'コンサルタントA',
            'position' => 'AP',
            'memo' => 'マネジメント力がある',
            'price' => '2000000',
            ],
            [
            'name' => 'コンサルタントB',
            'position' => 'EM',
            'memo' => 'IT知見がある',
            'price' => '1500000',
            ],
            [
            'name' => 'コンサルタントC',
            'position' => 'SA',
            'memo' => 'リサーチ力に定評がある',
            'price' => '1000000',
            ],
        ]);
    }
}
