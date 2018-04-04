<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class AdmissionRegisterRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
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
      'reg_name' => 'required',
      'reg_email' => 'required|unique:users,email',
      'reg_password' => 'required|confirmed',
    ];
  }
  public function messages()
  {
    return [
      'reg_name.required' => 'Name is required.',
      'reg_email.required' => 'Email is required.',
      'reg_email.unique' => 'Email is already taken.',
      'reg_password.required' => 'Password is required.',
      'reg_password.confirmed' => 'Passwords does not match.',
    ];
  }
}
