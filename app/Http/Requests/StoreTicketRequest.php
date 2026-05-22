<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class StoreTicketRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'category_id' => ['required', 'int'],
            'priority_id' => ['required', 'int'],
            'description' => ['nullable', 'string', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'title' => 'O campo título é obrigatório',
            'category_id' => 'O campo categoria é obrigatório',
            'priority_id' => 'O campo prioridade é obrigatório',
        ];
    }
}
