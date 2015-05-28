<?php namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
//use Illuminate\Http\Request;
use Request;

=======
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
=======
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
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
<<<<<<< HEAD
<<<<<<< HEAD
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



=======
=======
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

<<<<<<< HEAD
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
=======
>>>>>>> fb956cc7167e13157c4028a9237ee6a5017c1080
}
