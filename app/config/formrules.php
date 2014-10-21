<?php

return array(
	'create_user' => array(
		'lastname' => 'Required|max:100',
		'firstname' => 'Required|max:100',
		'username' => 'Required|min:5|max:30|unique:users,username',
		'password' => 'Required|min:6|confirmed',
		'contactno' => 'Required|max:100',
		'position' => 'Required|max:100',
		'email' => 'Required|max:100|email'
	),

	'edit_user' => array(
		'lastname' => 'Required|max:100',
		'firstname' => 'Required|max:100',
		'contactno' => 'Required|max:100',
		'position' => 'Required|max:100',
		'email' => 'Required|max:100|email'
	)
);