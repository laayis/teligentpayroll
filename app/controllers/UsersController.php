<?php

class UsersController extends \BaseController {


	protected $layout;

	function __construct(){
		$this->layout = 'admintemplate';
		$this->beforeFilter('csrf', array('only' =>
                    array('store', 'update', 'destroy')));
	}

	
	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//		
		$users = User::where('id','<>',Auth::user()->id)
			->where('id','<>', 1)->get();

		$this->layout->content = View::make('secure.users.index')->with('users', $users);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$modules = Module::where('id', '<>', 1)->get();
		$this->layout->content = View::make('secure.users.create')->with('modules', $modules);
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{	
		$validator = Validator::make(Input::all(), Config::get('formrules.create_user'));
		if( $validator->fails()) {
			return Redirect::to('secure/users/create')->withErrors($validator)->withInput();
		}

		$user = array(
				'isadmin'		=> Input::get('isadmin') <> 'on' ? 0 : 1,
				'lastname' 		=> Input::get('lastname'),
				'firstname'		=> Input::get('firstname'),
				'username' 		=> Input::get('username'),
				'password'  	=> Hash::make(Input::get('password')),
				'userpic'		=> 'no-image.jpg',
				'email' 		=> Input::get('email'),
				'created_by' 	=> Auth::user()->id,
				'modified_by' 	=> Auth::user()->id
			);



		User::unguard();
		$newUser = User::create($user);
		$newUser->reguard();

		$lastInsertedId = DB::getPdo()->lastInsertId();

		if (Input::get('isadmin') === 'on') {
				$accessrights = array(
					'userid' 		=> $lastInsertedId,
					'moduleid' 		=> 1,
					'tread' 		=> 1,
					'tcreate' 		=> 1,
					'tupdate' 		=> 1,
					'tdelete' 		=> 1,
					'created_by' 	=> Auth::user()->id,
					'modified_by' 	=> Auth::user()->id
				);

			Accessright::unguard();
			$newRight = Accessright::create($accessrights);
			$newRight->reguard();
		}

		for ($i = 2; $i < DB::table('modules')->count() + 1; $i++) 
		{
			$modules = Input::get('chkmodule' . $i);
			if (count($modules) > 0) 
			{
				$accessrights = array(
					'userid' 	=> $lastInsertedId,
					'moduleid' 	=> $i,
					'created_by' => Auth::user()->id,
					'modified_by' => Auth::user()->id
				);

				foreach ($modules as $key => $value) 
				{
					switch ($value) 
					{
						case 0:
							$accessrights['tread'] = 1;
							break;
						
						case 1:
							$accessrights['tcreate'] = 1;
							break;

						case 2:
							$accessrights['tupdate'] = 1;
							break;

						case 3:
							$accessrights['tdelete'] = 1;
							break;
					}
				}

				Accessright::unguard();
				$newRight = Accessright::create($accessrights);
				$newRight->reguard();
			}
		}



		return Redirect::to('secure/users');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$user = User::find(Crypt::decrypt($id));

		$modules = DB::select(DB::raw('SELECT DISTINCT a.id id,
			a.description description, 
			IFNULL(b.tread,0) tread,
			IFNULL(b.tcreate,0) tcreate, 
			IFNULL(b.tupdate,0) tupdate,
			IFNULL(b.tdelete,0) tdelete 
			FROM modules a LEFT JOIN accessrights b
			ON a.id = b.moduleid AND b.userid = 
			' . Crypt::decrypt($id) . ' where a.id <> 1 ORDER BY a.id'));

		$this->layout->content = View::make('secure.users.edit')
			->with('user', $user)
			->with('modules', $modules);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$user = User::find(Crypt::decrypt($id));

		$user->isadmin		= Input::get('isadmin') <> 'on' ? 0 : 1;
		$user->lastname		= Input::get('lastname');
		$user->firstname	= Input::get('firstname');
		$user->username 	= Input::get('username');
		$user->password 	= Input::get('password');
		$user->userpic 		= Input::get('userpic');
		$user->email 		= Input::get('email');
		$user->modified_by 	= Input::get('modified_by');

		$user->save();

		Accessright::where('userid', '=', $user->id)->delete();

		if (Input::get('isadmin') === 'on') {
				$accessrights = array(
					'userid' 		=> $user->id,
					'moduleid' 		=> 1,
					'tread' 		=> 1,
					'tcreate' 		=> 1,
					'tupdate' 		=> 1,
					'tdelete' 		=> 1,
					'created_by' 	=> Auth::user()->id,
					'modified_by' 	=> Auth::user()->id
				);

			Accessright::unguard();
			$newRight = Accessright::create($accessrights);
			$newRight->reguard();
		}

		for ($i = 2; $i < DB::table('modules')->count() + 1; $i++) 
		{
			$modules = Input::get('chkmodule' . $i);
			if (count($modules) > 0) 
			{
				$accessrights = array(
					'userid' 	=> $user->id,
					'moduleid' 	=> $i,
					'created_by' => Auth::user()->id,
					'modified_by' => Auth::user()->id
				);

				foreach ($modules as $key => $value) 
				{
					switch ($value) 
					{
						case 0:
							$accessrights['tread'] = 1;
							break;
						
						case 1:
							$accessrights['tcreate'] = 1;
							break;

						case 2:
							$accessrights['tupdate'] = 1;
							break;

						case 3:
							$accessrights['tdelete'] = 1;
							break;
					}
				}

				Accessright::unguard();
				$newRight = Accessright::create($accessrights);
				$newRight->reguard();
			}
		}

		return Redirect::to('secure/users');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}