<?php

namespace Modules\Posts\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends BaseApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'bail|required|string|min:4|max:150',
            'body' => 'bail|required|string|min:50|max:500',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans('posts.errors.required'),
            'title.string' => trans('posts.errors.string'),
            'title.min' => trans('posts.errors.min'),
            'title.max' => trans('posts.errors.max'), //etc this is just an example
        ];
    }
}
