<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::payload()->get('role') == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:countries,name,'.$this->country->id.'|max:50',
            'code' => 'required|string|unique:countries,code,'.$this->country->id.'|max:3',
            'currency' => 'required|string|max:50',
            'area' => 'required|integer|min:0',
            'language' => 'required|string',
        ];
    }
}
