<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxIdRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'reference_code' => 'required|max:255',
            'organisation_id' => 'required|max:255'
        ];
    }
}
