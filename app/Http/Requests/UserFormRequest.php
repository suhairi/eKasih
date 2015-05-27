<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserFormRequest extends Request {

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

//        dd(Request::input('_method'));

        if(Request::input('_method') == 'PATCH') {

            $rules = [
                'name'                  => 'required',
                'email'                 => 'required|email',
                'role_id'               => 'required|digits_between:1,5',
            ];
        }

        if(Request::input('_method') == null) {

            $rules = [
                'name'                  => 'required',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required|min:6',
                'password_confirmation' => 'required|same:password',
                'role_id'               => 'required|digits_between:1,5',
            ];
        }

        return $rules;
	}

}
