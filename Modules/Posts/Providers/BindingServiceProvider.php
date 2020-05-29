<?php

namespace Modules\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Posts\Http\Controllers\PostsController;
use Modules\Posts\Repositories\Contracts\PostsRepositoryInterface;
use Modules\Posts\Repositories\PostsRepository;
use Modules\Posts\Services\Contracts\PostsServiceInterface;
use Modules\Posts\Services\PostsService;

class BindingServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(PostsController::class)
            ->needs(PostsServiceInterface::class)
            ->give(PostsService::class);

        $this->app->when(PostsService::class)
            ->needs(PostsRepositoryInterface::class)
            ->give(PostsRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
