<?php

namespace App\Http\Requests\Dashboard\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name'        =>'required|unique:categories,name',
            'parent_id'   =>'nullable|exists:categories,id',
            'image_path'  =>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ];
    }
}
