<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:3|unique:posts,title',
            'description' => 'required|min:10',
            'user_id' => 'exists:posts,user_id'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is Required',
            'title.min' => 'Minimum Title Length is 3 characters',
            'title.unique' => 'Title already exists',
            'description.required' => 'Description is Required',
            'description.min' => 'Minimum Description Length is 10 characters'
        ];
    }
}
