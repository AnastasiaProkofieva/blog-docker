<?php

namespace App\Http\Requests\Post;

use App\Http\Requests\Common\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.,
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:250',
            'description' => 'required|string|max:2000',
            'body' => 'required|string|max:2000',
            'cover' => 'required|string|max:250',
            'category_id' => 'required|int|exists:App\Models\Category,id',
            'user_id' => 'int',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'НАПИШИ ЗАГОЛОВОК!!!!!!!',
        ];
    }
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => str($this->title)->slug()->toString(),
            'user_id' => auth()->id()
        ]);
    }
}
