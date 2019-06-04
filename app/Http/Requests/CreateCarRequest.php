<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'brand' => 'required' ,
            'year' => 'required' ,
            'origin' => 'required' ,
            'max_speed' => 'required' ,
            'state' => 'required' ,
            'description' => 'required' ,
            'colors' => 'required' ,
            'doors' => 'required' ,
            'active'=> 'required' ,
        ];
    }
}
