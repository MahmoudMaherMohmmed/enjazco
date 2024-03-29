<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|array',
            'title.*' => 'string',
            'short_description' => 'required|array',
            'short_description.*' => 'required|string',
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
            'icon' => 'required',
            'image' => 'sometimes|mimes:jpeg,png,jpg,svg',
            'status' => 'required',
        ];
    }
}
