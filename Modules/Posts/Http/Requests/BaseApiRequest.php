<?php


namespace Modules\Posts\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class BaseApiRequest extends FormRequest
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

    public function all($keys = null)
    {
        $payload = $this->route()->parameters();
        return array_replace_recursive(parent::all(), $payload);
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'meta'=> [
                'message' => 'error',
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY
            ],
        ],Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
