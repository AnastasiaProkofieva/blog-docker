<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\Common\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends BaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text' => 'required|string|max:4000',
        ];
    }
}
