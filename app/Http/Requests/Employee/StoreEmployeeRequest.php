<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'email' => 'required|email|unique:employees,email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'photo' => 'image|mimes:jpeg,png|max:1024',
            'company_id' => 'required|integer',
        ];
    }
}
