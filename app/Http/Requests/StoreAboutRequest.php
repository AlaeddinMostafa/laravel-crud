<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreAboutRequest extends FormRequest
{
    private mixed $image;

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
     * @return array<string, mixed>
     */
    #[ArrayShape(['title' => "string", 'phone' => "string", 'email' => "string", 'telegram' => "string", 'description' => "string", 'image' => "string", 'banner' => "string"])] public function
    rules(): array
    {
        return [
            'title' => 'required|min:10|max:100',
            'phone' => 'required|min:10|max:100',
            'email' => 'required|min:10|max:100',
            'telegram' => 'required|min:10|max:100',
            'description' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
