<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEntryRequest extends Request
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
          'email' => 'required|email'
        , 'nume' => 'required|min:3'
        , 'telefon' => 'required|min:10'
        // , 'contact' => 'required'
        // , 'optradio' => 'required'
        ];
    }
}
