<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class CreateCommentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'commentType' => ['required', 'int'],
            'comment' => ['required', 'string']
        ];
    }

    public function messages(): array 
    {
        return [
            'comment.required' => 'Faça um comentário!',
            'commentType.required' => 'Preencher o campo tipo de comentário!'
        ];
    }
}
