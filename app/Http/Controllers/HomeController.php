<?php namespace App\Http\Controllers;


use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
        if(\Auth::guest())
		    return redirect('/login');

        return redirect('/dashboard');
	}

    public function getLogin()
	{
		return view('login');
	}

    public function postLogin() {

        $input = Request::all();

        $validation = \Validator::make($input, [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if($validation->fails()){
            return redirect('/login')
                ->withInput()
                ->WithErrors($validation->errors());
        }

        if(\Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            return redirect()->intended('dashboard');
        }

        return redirect('/login');
    }

    public function logout() {

        \Auth::logout();
        return redirect('/');
    }

}
