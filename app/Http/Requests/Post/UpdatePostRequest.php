<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'min:3',
            'description' => 'min:10'
        ];
    }
    public function messages()
    {
        return [
            'title.min' => 'Minimum Title Length is 3 characters',
            'description.min' => 'Minimum Description Length is 10 characters'
        ];
    }
}
