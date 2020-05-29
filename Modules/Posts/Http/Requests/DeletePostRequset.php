<?php

namespace Modules\Posts\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeletePostRequset extends BaseApiRequest
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
}
