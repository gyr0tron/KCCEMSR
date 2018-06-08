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
      'cphone' => 'required|string',
      'cparent' => 'required|string',
      'cpin' => 'required|string',
      'pflat' => 'required|string',
      'proad' => 'required|string',
      'parea' => 'required|string',
      'pcity' => 'required|string',
      'pphone' => 'required|string',
      'ppin' => 'required|string',
    ];
  }
  public function messages()
  {
    return [
      'surname.required' => 'Surname is required.',
      'firstname.required'  => 'First name is required.',
      'fathername.required'  => 'Father name is required.',
      'mothername.required'  => 'Mother name is required.',
      'dob.required'  => 'Date of birth is required.',
      'caste.required'  => 'Caste is required.',
      'sex.required'  => 'Sex is required.',
      'caddress.required'  => 'Correspondence address is required.',
      'sex.required'  => 'Sex is required.',
      'croad.required'  => 'Correspondence road is required',
      'carea.required'  => 'Correspondence area is required.',
      'ccity.required'  => 'Correspondence city is required.',
      'cphone.required'  => 'Correspondence phone is required.',
      'cparent.required'  => 'Correspondence parent is required.',
      'pflat.required'  => 'Permanent flat is required.',
      'proad.required'  => 'Permanent road is required.',
      'parea.required'  => 'Permanent area is required.',
      'pcity.required'  => 'Permanent city is required.',
      'pphone.required'  => 'Permanent phone is required.',
      'ppin.required'  => 'Permanent pin is required.',
    ];
  }
}
