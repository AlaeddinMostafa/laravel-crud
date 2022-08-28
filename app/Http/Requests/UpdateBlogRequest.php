<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateBlogRequest extends FormRequest
{
    private mixed $status;
    private mixed $title;

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
    #[ArrayShape(['title' => "string", 'editor' => "string", 'status' => "string", 'image' => "string"])] public function
    rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'editor' => 'required|min:100',
            'status' => "required",
            'image' => 'image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
