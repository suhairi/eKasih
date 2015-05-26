<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;

use Illuminate\Http\Request;

class CManagerController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		return view('home');
	}

    public function createUser() {

        $users = User::all();

        $roles = Role::all();
        $selectRoles = [0 => 'Select Level...'];

        foreach($roles as $role) {
            $selectRoles[$role->id] = $role->name;
        }

        return view('cmanager.createUser', compact('selectRoles', 'users'));
    }

    public function postCreateUser() {

        User::create(Request::all());

        return redirect('/cmanager/create-user');
    }


}
