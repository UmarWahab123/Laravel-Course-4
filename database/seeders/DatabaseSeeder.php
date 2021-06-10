<?php

namespace Database\Seeders;

//call here Faker and db packages
use Faker\Factory as Faker;
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
        // \App\Models\User::factory(10)->create();
        // code to insert record to db table students by using Faker package
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
            ]);
        }

    }
}
