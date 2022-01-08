<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('countries')->insert([
            'country_name' => 'GR',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'bwt',
            'country_id' => 1,
        ]);

        DB::table('users')->insert([
            'user_name' => 'user1',
        ]);

        DB::table('users')->insert([
            'user_name' => 'user2',
        ]);

        DB::table('country_users')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'date_at' => now(),
        ]);

        DB::table('country_users')->insert([
            'company_id' => 1,
            'user_id' => 2,
            'date_at' => now(),
        ]);
    }
}
