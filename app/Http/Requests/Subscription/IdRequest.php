<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;

class IdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return [
            'author_id' => [
                'required',
                'int', 'exists:App\Models\User,id',
                Rule::unique('subscriptions', 'author_id')
                    ->where('reader_id', auth()->id())
            ],
            'reader_id' => 'required|int'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author_id' => 'required|int|exists:App\Models\User,id',
        ];
    }
}
