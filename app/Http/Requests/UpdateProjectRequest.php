<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            // Validator rules
            'title' => 'required|max:150',
            'start_date' => 'required',
            'end_date' => 'nullable',
            'description' => 'nullable|max:65535',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // Validator messages
            'title.required' => 'Il campo Titolo è obbligatorio.',
            'title.max' => 'Il campo Titolo può contenere un massimo di 150 caratteri',
            'start_date' => 'Il campo Data di inizio è obbligatorio',
            'description.max' => 'Il campo description può contenere un massimo di 65535 caratteri'
        ];
    }
}
