<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
            'name' => 'テスト太郎',
            'email' => 'test@example.com',
            'password' => '$2y$10$eCe5qDlg1l9e7HEz.BIONOQEsgyoxnb.YjVuQWLdZbtIQN92u.m8q',
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'テスト次郎',
            'email' => 'test2@example.com',
            'password' => '$2y$10$fj3PqZccF/1MjlPLEuXkKej.o1fiPk6YgCXuiwojur0bHMo1Qc79q',
        ];
        DB::table('users')->insert($param);
    }
}
