<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class StudentApplicationRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    if(Auth::user()->type == 1) {
        return true;
    }
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
      'surname' => 'required|string',
      'firstname' => 'required|string',
      'fathername' => 'required|string',
      'mothername' => 'required|string',
      'dob' => 'required|string',
      'caste' => 'required|string',
      'sex' => 'required|string',
      'caddress' => 'required|string',
      'croad' => 'required|string',
      'carea' => 'required|string',
      'ccity' => 'required|string',
      'ctelephone' => 'required|string',
      'cphone' => 'required|string',
      'cparent' => 'required|string',
      'cpin' => 'required|string',
    ];
  }
}
