<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// turn off foreign key checks
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Reset Users Table
        DB::table('users')->truncate();

        // Insert 3 Dummy Users
        DB::table('users')->insert([
        	[
        		'name' => 'Chandika Nurdiansyah',
        		'email' => 'chandika7d@gmail.com',
        		'password' => bcrypt('123456'),
        	],
        	[
        		'name' => 'John Doe',
        		'email' => 'johndoe@gmail.com',
        		'password' => bcrypt('123456'),
        	],
        	[
        		'name' => 'John Done',
        		'email' => 'johndone@gmail.com',
        		'password' => bcrypt('123456'),
        	],
        ]);

    	// turn on foreign key checks
    	// DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
