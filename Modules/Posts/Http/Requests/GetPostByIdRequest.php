<?php

namespace Modules\Posts\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetPostByIdRequest extends BaseApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_id' => 'bail|required|numeric|exists:posts,id'
        ];
    }

    public function messages()
    {
        return [
            'post_id.required' => trans('posts.errors.required'),
            'post_id.numeric' => trans('posts.errors.numeric'),
            'post_id.exists' => trans('posts.errors.exists')//etc this is just an example
        ];
    }
}
