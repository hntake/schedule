<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types =[
            ['code' => 1, 'type' => '小1'],
            ['code' => 2, 'type' => '小2'],
            ['code' => 3, 'type' => '小3'],
            ['code' => 4, 'type' => '小4'],
            ['code' => 5, 'type' => '小5'],
            ['code' => 6, 'type' => '小6'],
            ['code' => 7, 'type' => '中1'],
            ['code' => 8, 'type' => '中2'],
            ['code' => 9, 'type' => '中3'],
            ['code' => 10, 'type' => '高1'],
            ['code' => 11, 'type' => '高2'],
            ['code' => 12, 'type' => '高3'],

        ];
        DB::table('types')->insert($types);
    }
}
