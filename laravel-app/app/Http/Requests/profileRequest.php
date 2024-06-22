<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|min:4|max:25|confirmed',
            'bio' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:10240',
        ];
    }
}
