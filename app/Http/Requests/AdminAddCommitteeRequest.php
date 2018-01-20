<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;
use App\ResponseBuilder;

class AdminAddCommitteeRequest extends FormRequest
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
      'name' => 'required|max:100|regex:/(^[A-Za-z0-9 ]+$)+/',
      'description' => 'required|string',
      'image' => 'required|image',
      'file' => 'required|file',
    ];
  }
}
