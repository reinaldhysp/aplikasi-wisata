<?php

namespace Database\Seeders;

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
        $this->call(UserTableSeeder::class);
        $this->call(BeritaTableSeeder::class);
        $this->call(WisataTableSeeder::class);
        $this->call(AkomodasiTableSeeder::class);
    }
}
