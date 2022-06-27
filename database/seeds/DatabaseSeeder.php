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
       
        $this->call(CommonSeeder::class);
        $this->call(HrSeeder::class);
        $this->call(LoginSeeder::class);
        $this->call(SubmissionSeeder::class);
    }
}
