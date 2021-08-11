<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => "Admin",
            'email' => "admin@techgear.com",
            'password' => 12345678,
            'type' => 'admin',
        ]);
    }
}
