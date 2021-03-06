<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompanyRequest extends FormRequest
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
            'name' => 'required|string',
            'inn' => 'required|integer',
            'information' => 'required|string',
            'director_id' => 'required|integer|min:1',
            'address' => 'required|string',
            'phone_number' => 'required|integer',
        ];
    }
}
