<?php

namespace App\Http\Requests\Tag;

use App\Http\Requests\Common\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class IdArrayRequest extends BaseRequest
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
            'tags' => 'array',
            'tags.*' => 'int|exists:App\Models\Tag,id'
        ];
    }
}
