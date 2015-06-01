<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Peserta;

use Illuminate\Http\Request;
use App\Http\Requests\PesertaFormRequest;

class UserController extends Controller {

	public function index() {

        \Session::flush('carianNoKP');
        return redirect('/user/carian');
    }

    public function carian() {
            $peserta = null;

        return view('carian')
            ->with('peserta', $peserta);
    }

    public function resultCarian() {
        $request = \Request::all();

        $validation = \Validator::make($request, [
            'noKP'  => 'required|digits_between:6,12'
        ]);

        if($validation->fails()){
            return redirect('/user/carian')
                ->withInput()
                ->withErrors($validation->errors());
        }

        $noKP = \Request::input('noKP');

        \Session::put('carianNoKP', $noKP);

        $peserta = Peserta::find($noKP);

        return view('carian')
            ->with('peserta', $peserta);

        dd($request);
    }

    public function create() {
        return view('user.createPeserta');
    }

    public function store(PesertaFormRequest $request) {

        $peserta = new Peserta;

        if($request->hasFile('photo')){

            $ext = $request->file('photo')->getClientOriginalExtension();

            if($ext == 'jpg' | $ext == 'jpeg' | $ext == 'bmp' | $ext == 'png' | $ext == 'gif') {
                $filename       = $request->input('noKP') . '.' . $request->file('photo')->getClientOriginalExtension();
                $destination    = public_path() . '/uploads/peserta/';

                $request->file('photo')->move($destination, $filename);

                $peserta->photo = $filename;

            } else {
                \Session::flash('fail', 'Invalid File Upload. Posible Hacking!');
                return redirect('/logout');
            }
        }

        $peserta->noKP          = \Request::input('noKP');
        $peserta->nama          = \Request::input('nama');
        $peserta->alamat        = \Request::input('alamat');
        $peserta->jantina       = \Request::input('jantina');
        $peserta->noTel         = \Request::input('noTel');
        $peserta->agama         = \Request::input('agama');
        $peserta->bangsa        = \Request::input('bangsa');
        $peserta->pekerjaan     = \Request::input('pekerjaan');
        $peserta->perkahwinan   = \Request::input('perkahwinan');
        $peserta->pendidikan    = \Request::input('pendidikan');

        if($peserta->save()){
            \Session::flash('success', 'Success');
        } else {
            \Session::flash('fail', 'Failed');
        }

        return redirect('/user/peserta/create');
    }

    public function update(Request $request, $id) {
        dd($id);
    }

    protected function checkNoKP($noKP) {
        $exist = Peserta::find($noKP);

        if(count($exist) > 0 )
            return true;
        else
            return false;
    }






}
