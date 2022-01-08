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
        // DB::table('countries')->insert([
        //     'country_name' => 'GR',
        // ]);

        // DB::table('companies')->insert([
        //     'company_name' => 'bwt',
        //     'countries_id' => 1,
        //     'date_at' => now()
        // ]);

        // DB::table('users')->insert([
        //     'user_name' => 'user1',
        //     'companies_id' => 1,
        // ]);

        // DB::table('users')->insert([
        //     'user_name' => 'user2',
        //     'companies_id' => 2,
        // ]);
    }
}
