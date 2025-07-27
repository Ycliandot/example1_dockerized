<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'email' => 'required|email|unique:employees,email,' . $this->route('employee')->id,
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'delete_photo' => 'nullable',
            'company_id' => 'required|integer',
        ];
    }
}
