<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
    			'cate_name' => 'IPhone',
    			'cate_slug' => str_slug('iphone')
    		],
    		[
    			'cate_name' => 'Samsung',
    			'cate_slug' => str_slug('samsung')
    		],
    		[
    			'cate_name' => 'Nokia',
    			'cate_slug' => str_slug('nokia')
    		]

    	];
    	DB::table('vp_categories')->insert($data); 
    }
}
