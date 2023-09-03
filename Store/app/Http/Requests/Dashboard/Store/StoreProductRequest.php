<?php

namespace App\Http\Requests\Dashboard\Store;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->type == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'           =>'required|string|max:255',
            'description'    =>'required|string',
            'price'          =>'nullable|numeric',
            'category_id'    =>'numeric|exists:categories,id',
            'image_path'          =>'nullable',
            'discount_price' => 'nullable|numeric'
        ];
    }
}
