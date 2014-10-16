<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		$users = array(
                  
                    	'isnew' => 0,
                    	'isadmin' => 1,
                    	'status' => 'active',
      					'username' => 'superuser',
                        'password' => Hash::make('!@#$%^'),
                        'lastname' => 'superuser',
                        'firstname' => 'superuser',
                        'position' => 'System Admin',
                        'contactno' => '09054005755',
                        'email' => 'snptest@yahoo.com.ph',
                        'userpic'=> 'no-image.jpg',
                        'created_by' => 1,
                        'modified_by' => 1,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
		);

		DB::table('users')->insert($users);
	}

}