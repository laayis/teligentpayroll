<?php

class LoginController extends \BaseController {

	function __construct() {
		$this->layout = 'logintemplate';
		$this->beforeFilter('csrf', array('only' =>
                    array('store', 'update', 'destroy')));
	}

	public function login(){
		$this->layout->content = View::make('secure.login');
	}

	public function checkLogin()
	{
		$user = array('username' => Input::get('username'),'password' => Input::get('password'));
		if(Auth::attempt($user)){
			$loggedUser = User::where('username','=', $user['username'])->first();
			if($loggedUser->status == 'active')
			{
				$loggedUser->isnew = 0;
				$loggedUser->save();
				//Session::flash('flashdata', array('message'=> Biblehelpers::getdailybibleverse()['content'] .'<br/>' . Biblehelpers::getdailybibleverse()['verse'] ,'code'=>1));
				print_r('login');die();
			}

			$this->layout->content = View::make('secure.login')->with('error','This user is not active. ' . '<br/>' .' Please contact the administrator to ' . '<br/>' .' activate your account');
		}

		$this->layout->content = View::make('secure.login')->with('error','Username and Password did not match');
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('login');
	}
}
