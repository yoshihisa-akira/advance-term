<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'region' => '東京都',
        ];
        DB::table('regions')->insert($param);
        $param = [
            'region' => '大阪府',
        ];
        DB::table('regions')->insert($param);
        $param = [
            'region' => '福岡県',
        ];
        DB::table('regions')->insert($param);
    }
}
