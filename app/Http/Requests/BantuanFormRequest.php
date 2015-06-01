<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BantuanFormRequest extends Request {

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
		return [
			'noKP'      => 'required|min:6',
            'program'   => 'required',
            'nilai'     => 'required|digit',
            'tahun'     => 'required|digits:4'
		];
	}

}
