<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(strtolower(\Auth::user()->role->name) == 'root')
            return redirect('/root');

        if(strtolower(\Auth::user()->role->name) == 'administrator')
            return redirect('/administrator');

        if(strtolower(\Auth::user()->role->name) == 'manager')
            return redirect('/manager');

        if(strtolower(\Auth::user()->role->name) == 'company manager')
            return redirect('/cmanager');

        if(strtolower(\Auth::user()->role->name) == 'user')
            return redirect('/user');
	}

    public function changePassword() {
        return view('changePassword');
    }

    public function postChangePassword() {
        return Request::all();
    }



}
