<?php


namespace Modules\Posts\Http\Responses;


use League\Fractal\TransformerAbstract;
use Modules\Posts\Entities\Post;

class UpdatePostResponse extends TransformerAbstract
{
    public function transform(Post $post)
    {
        return [
            'title' => $post->title,
            'body' => $post->body
        ];
    }
}
