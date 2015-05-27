<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserFormRequest;

//use Request;

use App\Role;
use App\User;

use Illuminate\Http\Request;

class CManagerController extends Controller {

	public function index() {
		return view('home');
	}

    public function create() {

        $users = User::orderBy('role_id', 'asc')->paginate(10);
        $roles = Role::all();
        $selectRoles = [0 => 'Select Level...'];

        foreach($roles as $role) {
            $selectRoles[$role->id] = $role->name;
        }

        return view('cmanager.createUser')
            ->with('selectRoles', $selectRoles)
            ->with('users', $users);
    }

    public function store(UserFormRequest $request) {

        $request['password'] = Hash::make($request['password']);

        if(User::create($request->all())) {
            \Session::flash('success', 'Success');
        } else {
            \Session::flash('fail', 'Failed');
        }

        return redirect('/cmanager/user/create');
    }

    public function destroy($id = 17) {

        $user = User::findOrFail($id);

        if($user->delete()){
            return redirect('/cmanager/user/create');
        }

        return redirect('/logout');
    }

    public function show($id) {

        $user = User::findOrFail($id);
        $users = User::paginate(10);
        $roles = Role::all();
        $selectRoles = [0 => 'Select Level...'];

        foreach($roles as $role) {
            $selectRoles[$role->id] = $role->name;
        }

        return view('cmanager.editUser')
            ->with('selectRoles', $selectRoles)
            ->with('user', $user)
            ->with('users', $users);
    }

    public function update(UserFormRequest $request, $id) {

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('/cmanager/user/create');
    }


}
