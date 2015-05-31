<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Peserta;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function index() {

        return view('carian');
    }

    public function carian() {
        return view('carian');
    }

    public function create() {
        return view('user.createPeserta');
    }

    public function store(Request $request) {

        if($request->hasFile('photo')){

            $ext = $request->file('photo')->getClientOriginalExtension();

            if($ext == 'jpg' | $ext == 'jpeg' | $ext == 'bmp' | $ext == 'png' | $ext == 'gif') {
                $filename       = $request->input('noKP') . '.' . $request->file('photo')->getClientOriginalExtension();
                $destination    = public_path() . '/uploads/peserta/';

                $request->file('photo')->move($destination, $filename);

                dd($destination);
            } else {
                \Session::flash('fail', 'Invalid File Upload. Posible Hacking!');
                return redirect('/logout');
            }
        }

        dd($destination);
        dd($request->input('photo'));

        if(Peserta::create($request->all())){
            \Session::flash('success', 'Success');
        } else {
            \Session::flash('fail', 'Failed');
        }

        return redirect('/user/peserta/create');
    }

    public function update(Request $request, $id) {
        dd($id);
    }






}
