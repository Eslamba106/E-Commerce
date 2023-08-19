<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'logo'=>'image|nullable',
            'title'=>'string|nullable',
            'description'=>'string|nullable',
            'email'=>'email|nullable',
            'phone'=>'string|nullable',
            'address'=>'string|nullable',
            'facebook'=>'string|nullable',
            'twittr'=>'string|nullable',
            'instagram'=>'string|nullable',
            'linkedin'=>'string|nullable',
        ];
    }
}
