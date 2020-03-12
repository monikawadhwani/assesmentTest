<?php

use Illuminate\Database\Seeder;
use App\User_model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User_model::create(
	        	[
	        		'name' => "Admin",
	        		'email' => "admin@mailinator.com",
	        		'password' => Hash::make('123456'),
	        		'user_type' => '1'
	        	]
        );
    }
}
