<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class AdminAddUserRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return Auth::user()->access==2;
  }

  public function response(array $errors)
  {
    return ResponseBuilder::send(false, $errors, "");
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'username' => 'required|string|unique:users,username',
      'fullname' => 'required|string',
      'email' => 'required|email|unique:users,email',
      'role' => 'required|integer',
      'password' => 'required'
    ];
  }
}
