<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	        	'name' => 'test',
	        	'email' => 'tester@test.com',
	        	'password' => '$2y$10$.ty3iz6HTO.prs/xjglPtuifYhblDCfoKHyZBEDAMwbhjy1PGjElO',
	        	'created_at' => '2020-09-06 11:55:16',
	        	'updated_at' => '2020-09-06 11:55:16'
	        ]
	    ]);
    }
}
