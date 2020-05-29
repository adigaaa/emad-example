<?php

namespace Modules\Posts\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends BaseApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_id' => 'bail|required|numeric|exists:posts,id',
            'title' => 'bail|required|string|min:4|max:150',
            'body' => 'bail|required|string|min:50|max:500',
        ];
    }
}
