<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'HDCVI',
                'slug' => 'hdcvi',
                'type' => 0,
                'trademark_id' => '1'
            ],
            [
                'name' => 'IMOU Wifi',
                'slug' => 'imou-wifi',
                'type' => 0,
                'trademark_id' => '1'
            ],
            [
                'name' => 'DAHUA IP',
                'slug' => 'dahua-ip',
                'type' => 0,
                'trademark_id' => '1'
            ],
            [
                'name' => 'HDCVI Recorder',
                'slug' => 'hdcvi-recorder',
                'type' => 2,
                'trademark_id' => '1'
            ],
            [
                'name' => 'IP Recorder',
                'slug' => 'ip-recorder',
                'type' => 2,
                'trademark_id' => '1'
            ],
            [
                'name' => 'DVR Recorder',
                'slug' => 'dvr-recorder',
                'type' => 2,
                'trademark_id' => '2'
            ],
            [
                'name' => 'EZVIZ',
                'slug' => 'exviz',
                'type' => 0,
                'trademark_id' => '2'
            ],
            [
                'name' => 'HIKVISION IP',
                'slug' => 'hik-ip',
                'type' => 0,
                'trademark_id' => '2'
            ],
            [
                'name' => 'NAS Recorder',
                'slug' => 'nas-recorder',
                'type' => 2,
                'trademark_id' => '2'
            ],
            [
                'name' => 'NVR Recorder',
                'slug' => 'nvr-recorder',
                'type' => 1,
                'trademark_id' => '2'
            ],
            [
                'name' => 'PTZ',
                'slug' => 'ptz',
                'type' => 1,
                'trademark_id' => '2'
            ],
            [
                'name' => 'TVI',
                'slug' => 'tvi',
                'type' => 1,
                'trademark_id' => '2'
            ],
        ]);
    }
}
