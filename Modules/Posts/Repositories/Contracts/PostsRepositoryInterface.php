<?php


namespace Modules\Posts\Repositories\Contracts;


interface PostsRepositoryInterface
{
    public function all();

    public function getById(array $data);

    public function create(array $data);

    public function update(array $data);

    public function delete(array $data);
}
