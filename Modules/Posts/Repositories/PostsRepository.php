<?php


namespace Modules\Posts\Repositories;


use Modules\Posts\Entities\Post;
use Modules\Posts\Repositories\Contracts\PostsRepositoryInterface;

class PostsRepository implements PostsRepositoryInterface
{

    public function all()
    {
        return Post::paginate(10);
    }

    public function getById(array $data)
    {
        return Post::find($data['post_id']);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data)
    {
        $post = Post::find($data['post_id']);
        $post->fill($data)->save();
        return $post;
    }

    public function delete(array $data)
    {
        Post::destroy($data['post_id']);
    }
}
