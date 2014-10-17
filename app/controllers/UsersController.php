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
		return User::all();

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
		//
		$modules = Input::get('chkmodule');
		dd(serialize($modules));

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

		return Redirect::to('secure/users/create');
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
		$this->layout->content = View::make('secure.users.edit');
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