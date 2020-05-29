<?php


namespace Modules\Posts\Http\Controllers;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    protected function metaSuccess()
    {
        return [
            'status' => Response::HTTP_OK,
            'message' => trans('posts.success'),
        ];
    }
}
