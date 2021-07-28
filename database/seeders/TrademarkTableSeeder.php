<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrademarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trademark')->insert([
            [
                'name' => 'DAHUA',
                'type' => 1
            ],
            [
                'name' => 'HIKVISION',
                'type' => 1
            ],
        ]);
    }
}
