<?php

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
    	$data = [
    		[
    			'email'=>'vpro@gmail.com',
    			'password'=>bcrypt('vpro@123'),
    			'level'=>1
    		],
    		[
    			'email'=>'admin@gmail.com',
    			'password'=>bcrypt('admin@123'),
    			'level'=>1
    		]

    	];
    	DB::table('vp_users')->insert($data);  
    }
}
