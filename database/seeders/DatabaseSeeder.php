<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            FaqsTableSeeder::class,
            TrademarkTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class
        ]);
    }
}
