<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
        	[
	        	'title' => 'This is a test post',
	        	'content' => 'This is the content of test post created by a tester of this project creator. This is just a rubbish text please don\'t take it seriously.',
	        	'author' => 'tester',
	        	'created_at' => '2020-05-06 11:55:16',
	        	'updated_at' => '2020-05-06 11:55:16'
	        ],
	        [
	        	'title' => 'Second test post',
	        	'content' => 'Please read this post carelessly. This is the second test post created by the second tester of this project creator. This is just a rubbish text please don\'t take it seriously.',
	        	'author' => 'tester123',
	        	'created_at' => '2020-04-06 11:55:16',
	        	'updated_at' => '2020-04-06 11:55:16'
	        ]
	    ]);
    }
}
