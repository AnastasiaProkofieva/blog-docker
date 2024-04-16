<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'reader_id' => auth()->id()
        ]);
    }
}
