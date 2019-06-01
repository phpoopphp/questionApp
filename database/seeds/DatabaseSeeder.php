<?php

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
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->truncate();
        factory(\App\User::class,10)->create();
        \DB::table('questions')->truncate();
        factory(\App\Question::class,30)->create();
    }
}
