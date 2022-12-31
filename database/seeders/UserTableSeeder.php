<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kosongkan semua data di tabel users
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('users')->truncate();

        //membuat 3 user secara manual
        \DB::table('users')->insert([
            [
                'name' => "Albert",
                'email' => "albert@yahoo.co.id",
                'password' => bcrypt('albert123')
            ],
            [
                'name'=>"Rio",
                'email' => "mr_Rio@yahoo.co.id",
                'password' => bcrypt('rio123')
            ],
            [
                'name' => "Reinaldhy",
                'email' => "rei@gmail.com",
                'password' => bcrypt('rei123')
            ],
        ]);
    }
}
