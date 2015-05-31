<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PesertaFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        if(\Auth::check())
            return true;

		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'noKP'          => 'required|min:6',
            'nama'          => 'required|min:3',
            'alamat'        => 'required|min:10',
            'jantina'       => 'required',
            'agama'         => 'required',
            'bangsa'        => 'required',
            'pekerjaan'     => 'required',
            'perkahwinan'   => 'required',
            'pendidikan'    => 'required'
		];

        return $rules;
	}

}
