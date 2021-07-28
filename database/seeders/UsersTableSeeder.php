<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ngô Văn Quyền',
                'email' => 'karuyanakaido24@gmail.com',
                'password' => Hash::make('Iamadmin@1234'),
                'role' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Admin',
                'email' => 'admin.minhkhanh@gmail.com',
                'password' => Hash::make('Iamadmin@1234'),
                'role' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2.minhkhanh@gmail.com',
                'password' => Hash::make('Iamadmin@1234'),
                'role' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Robot',
                'email' => 'robot.minhkhanh@gmail.com',
                'password' => Hash::make('Iamrobot@1234'),
                'role' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
