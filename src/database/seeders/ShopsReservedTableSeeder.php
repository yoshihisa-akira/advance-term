<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsReservedTableSeeder extends Seeder
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
            'user_id' => '1',
            'reserved_shop' => '仙人',
            'reserved_datetime' => '2023-12-06 17:00:00',
            'reserved_num' => '1人',
        ];
        DB::table('shops_reserved')->insert($param);
        $param = [
            'user_id' => '1',
            'reserved_shop' => 'らーめん極み',
            'reserved_datetime' => '2023-12-07 18:00:00',
            'reserved_num' => '2人',
        ];
        DB::table('shops_reserved')->insert($param);
        $param = [
            'user_id' => '2',
            'reserved_shop' => 'THE TOOL',
            'reserved_datetime' => '2023-12-08 13:00:00',
            'reserved_num' => '2人',
        ];
        DB::table('shops_reserved')->insert($param);
        $param = [
            'user_id' => '2',
            'reserved_shop' => 'ルーク',
            'reserved_datetime' => '2023-12-09 18:00:00',
            'reserved_num' => '2人',
        ];
        DB::table('shops_reserved')->insert($param);
        $param = [
            'user_id' => '2',
            'reserved_shop' => 'JJ',
            'reserved_datetime' => '2023-12-10 20:00:00',
            'reserved_num' => '2人',
        ];
        DB::table('shops_reserved')->insert($param);
    }
}
