<?php

namespace Database\Seeders;

use Database\Factories\DocumentFactory;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentFactory::factory(50)->create();
    }
}
