<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsEvaluationTableSeeder extends Seeder
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
            'store_name' => '仙人',
            'user_name' => 'テスト太郎',
            'evaluation_num' => 3,
            'comment' => '味良し、接客良し',
        ];
        DB::table('shops_evaluation')->insert($param);
    }
}
