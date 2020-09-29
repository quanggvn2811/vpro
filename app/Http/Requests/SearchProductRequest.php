<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchProductRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'search' => ['required', 'string', 'max:255',
           'regex:/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/'],
       ];
   }
}
