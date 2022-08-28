<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreSliderRequest extends FormRequest
{
    private mixed $image;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['title' => "string", 'status' => "string", 'image' => "string"])] public function
    rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
