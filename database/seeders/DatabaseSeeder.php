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
            'id' => 1,
            'country_name' => 'USE',
        ]);
        DB::table('countries')->insert([
            'id' => 2,
            'country_name' => 'China',
        ]);
        DB::table('countries')->insert([
            'id' => 3,
            'country_name' => 'Ukraine',
        ]);
        DB::table('countries')->insert([
            'id' => 4,
            'country_name' => 'Russia',
        ]);
        DB::table('countries')->insert([
            'id' => 5,
            'country_name' => 'Germany',
        ]);
        DB::table('countries')->insert([
            'id' => 6,
            'country_name' => 'England',
        ]);

        //
        DB::table('companies')->insert([
            'company_name' => 'bwt1',
            'country_id' => 1,
        ]);

        DB::table('companies')->insert([
            'company_name' => 'bwt2',
            'country_id' => 1,
        ]);

        DB::table('companies')->insert([
            'company_name' => 'bwt3',
            'country_id' => 1,
        ]);

        //
        DB::table('companies')->insert([
            'company_name' => 'bwt4',
            'country_id' => 2,
        ]);

        DB::table('companies')->insert([
            'company_name' => 'bwt5',
            'country_id' => 2,
        ]);

        DB::table('companies')->insert([
            'company_name' => 'bwt6',
            'country_id' => 2,
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
