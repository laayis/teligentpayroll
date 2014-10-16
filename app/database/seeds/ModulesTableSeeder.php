<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ModulesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('modules')->truncate();

		$modules = array(
                  		array(
	                    	'name' => 'usermodule',
	                    	'description' => 'user management',
	                        'created_by' => 1,
	                        'modified_by' => 1,
	                        'created_at' => date('Y-m-d H:i:s'),
	                        'updated_at' => date('Y-m-d H:i:s')
                        ),

                        array(
	                    	'name' => 'employeemodule',
	                    	'description' => 'employee management',
	                        'created_by' => 1,
	                        'modified_by' => 1,
	                        'created_at' => date('Y-m-d H:i:s'),
	                        'updated_at' => date('Y-m-d H:i:s')
                        ),

                        array(
	                    	'name' => 'reportsmodule',
	                    	'description' => 'reports',
	                        'created_by' => 1,
	                        'modified_by' => 1,
	                        'created_at' => date('Y-m-d H:i:s'),
	                        'updated_at' => date('Y-m-d H:i:s')
                        )
		);

		DB::table('modules')->insert($modules);
	}

}