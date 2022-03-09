<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call([
            HomeSeeder::class
        ]);
=======
        // \App\Models\User::factory(10)->create();
        // $this->call([PostSeeder::class]);
        // Post::factory(100)->create();
        $this->call([AboutSeeder::class]);
        $this->call([HomeSeeder::class]);
>>>>>>> 3b49a10eb426e205a0cdfef99d157dd235e9c616
    }
}
