<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RideRequest extends FormRequest
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
            'title'           => ['required', 'min:3'],
            'date'            => ['required', 'date'],
            'distance'        => 'required',
            'duration'        => 'required',
            'type'            => 'required',
        ];
    }
}
