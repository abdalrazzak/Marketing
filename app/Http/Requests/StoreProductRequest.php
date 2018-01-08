<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->can('create')) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the name of the product',
            'name.min' => 'The name should be at least 3 characters',
            'description.required' => 'Please enter a description for the product',
        ];
    }
}
