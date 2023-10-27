<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'txtid' => 'required|unique:students,idstudents|min:7|max:7',
        'txtfullname' => 'required',
        'txtgender' => 'required',
        'txtemail' => 'required|email|unique:students,emailaddress'->ignore($this->txtid,'idstudents'),
        'txtphone' => 'required|numeric',
        'txtaddress' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'txtfullname.required' => ':attribute Tidak Boleh Kosong'
        ];
    }
public function attributes(): array
{
    return [
        'txtfullname' => 'Nama Lengkap',
    ];
}
}
