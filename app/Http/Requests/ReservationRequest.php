<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'date' => "required",
            'heure' => "required",
            'emails' => "required|email",
            'api_token' => "required",
        ];
    }

    public function messages()
    {
        return [
            'date.required' => "La date est obligatoire !",
            'heure.required' => "L'heure est obligatoire !",
            'emails.required' => "L'email est obligatoire !",
        ];
    }
}
