<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Response;

use Modules\Posts\Http\Requests\CreatePostRequest;
use Modules\Posts\Http\Requests\DeletePostRequset;
use Modules\Posts\Http\Requests\GetPostByIdRequest;
use Modules\Posts\Http\Requests\UpdatePostRequest;
use Modules\Posts\Http\Responses\CreatePostResponse;
use Modules\Posts\Http\Responses\GetAllPostsResponse;
use Modules\Posts\Http\Responses\GetPostByIdResponse;
use Modules\Posts\Http\Responses\UpdatePostResponse;
use Modules\Posts\Services\Contracts\PostsServiceInterface;

/**
 * Class PostsController
 * @package Modules\Posts\Http\Controllers
 */
class PostsController extends BaseController
{
    /**
     * @var PostsServiceInterface
     */
    private $postsService;

    /**
     * PostsController constructor.
     * @param PostsServiceInterface $postsService
     */
    public function __construct(PostsServiceInterface $postsService)
    {
        $this->postsService = $postsService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        $result = $this->postsService->all();
        return fractal($result, GetAllPostsResponse::class)->addMeta($this->metaSuccess())->respond(Response::HTTP_OK);
    }

    /**
     * @param GetPostByIdRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById(GetPostByIdRequest $request)
    {
        $data = $request->only('post_id');
        $result = $this->postsService->getById($data);
        return fractal($result, GetPostByIdResponse::class)->addMeta($this->metaSuccess())->respond(Response::HTTP_OK);
    }

    /**
     * @param CreatePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreatePostRequest $request)
    {
        // i didn't implement an authentication layer for this api because this is just a example
        $data = $request->only('title','body');
        $result = $this->postsService->create($data);
        return fractal($result, CreatePostResponse::class)->addMeta($this->metaSuccess())->respond(Response::HTTP_CREATED);
    }

    /**
     * @param UpdatePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePostRequest $request)
    {
        // i didn't implement an authentication layer for this api because this is just a example
        $data = $request->only('title','body','post_id');
        $result = $this->postsService->update($data);
        return fractal($result, UpdatePostResponse::class)->addMeta($this->metaSuccess())->respond(Response::HTTP_OK);
    }

    /**
     * @param DeletePostRequset $requset
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function delete(DeletePostRequset $requset)
    {
        // i didn't implement an authentication layer for this api because this is just a example
        $data = $requset->only('post_id');
        $this->postsService->delete($data);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
