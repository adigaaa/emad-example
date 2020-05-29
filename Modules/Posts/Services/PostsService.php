<?php


namespace Modules\Posts\Services;


use Modules\Posts\Repositories\Contracts\PostsRepositoryInterface;
use Modules\Posts\Services\Contracts\PostsServiceInterface;

class PostsService implements PostsServiceInterface
{
    /**
     * @var PostsRepositoryInterface
     */
    private $postsRepository;

    /**
     * PostsService constructor.
     * @param PostsRepositoryInterface $postsRepository
     */
    public function __construct(PostsRepositoryInterface $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function all()
    {
        return $this->postsRepository->all();
    }

    public function getById(array $data)
    {
        return $this->postsRepository->getById($data);
    }

    public function create(array $data)
    {
        return $this->postsRepository->create($data);
    }

    public function update(array $data)
    {
        return $this->postsRepository->update($data);
    }

    public function delete(array $data)
    {
        $this->postsRepository->delete($data);
    }
}
