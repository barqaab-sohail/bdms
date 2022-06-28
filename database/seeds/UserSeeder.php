<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        \DB::table('users')->insert([
            'user_status'=>1,
            'email' => 'sohail@barqaab.com',
            'password' => bcrypt('great786'),
        ]);

        $modelHasRoles = array(
			array('role_id' => '1', 'model_type' => 'App\User','model_id'=>'2')
		);

       \DB::table('model_has_roles')->insert($modelHasRoles);
    }
}
