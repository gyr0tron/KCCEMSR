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
    return Auth::check();
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
      'reg_email' => 'required',
      'reg_password' => 'required|confirmed',
    ];
  }
}
