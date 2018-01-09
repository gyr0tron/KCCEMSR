<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class AdminAddInfrastructure extends FormRequest
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
      'name' => 'required|string',
      'description' => 'required|string',
      'image' => 'required|image'
    ];
  }
}
