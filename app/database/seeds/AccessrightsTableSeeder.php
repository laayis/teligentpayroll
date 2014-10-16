<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AccessrightsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('accessrights')->truncate();

		$accessrights = array(
	                  		array(
		                    	'userid' => 1,
		                    	'moduleid' => 1,
		                    	'tread' => 1,
		                    	'tcreate' => 1,
		                    	'tupdate' => 1,
		                    	'tdelete' => 1,
		                        'created_by' => 1,
		                        'modified_by' => 1,
		                        'created_at' => date('Y-m-d H:i:s'),
		                        'updated_at' => date('Y-m-d H:i:s')
	                        ),

	                        array(
		                    	'userid' => 1,
		                    	'moduleid' => 2,
		                    	'tread' => 1,
		                    	'tcreate' => 1,
		                    	'tupdate' => 1,
		                    	'tdelete' => 1,
		                        'created_by' => 1,
		                        'modified_by' => 1,
		                        'created_at' => date('Y-m-d H:i:s'),
		                        'updated_at' => date('Y-m-d H:i:s')
	                        ),

	                        array(
		                    	'userid' => 1,
		                    	'moduleid' => 3,
		                    	'tread' => 1,
		                    	'tcreate' => 1,
		                    	'tupdate' => 1,
		                    	'tdelete' => 1,
		                        'created_by' => 1,
		                        'modified_by' => 1,
		                        'created_at' => date('Y-m-d H:i:s'),
		                        'updated_at' => date('Y-m-d H:i:s')
	                        )
		);

		DB::table('accessrights')->insert($accessrights);
	}

}